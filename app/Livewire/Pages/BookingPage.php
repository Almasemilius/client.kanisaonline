<?php

namespace App\Livewire\Pages;

use App\Models\BillingInformation;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class BookingPage extends Component
{
    public Event $event;
    public $totalAmount = 0;
    public $totalQuantity = 0;
    public $tickets;
    public $delivery;
    public $payment;
    public $atendeesRecords = [];
    public BillingInformation $billing;


    protected $rules = [
        'billing.name' => 'required',
        'billing.phone' => 'required',
        'billing.email' => 'required|email'
    ];

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    function mount(Event $event)
    {
        $this->event = $event;
        $this->billing = new BillingInformation();

        $tickets = session('tickets');
        foreach ($tickets as $key => $ticket) {
            $this->totalAmount += $ticket['amount'];
            $this->totalQuantity += $ticket['quantity'];
        }

        $this->tickets = $tickets;
    }

    #[On('set-method')]
    function setDeliveryMethod($delivery)
    {
        $this->delivery = $delivery;
    }

    #[On('set-payment')]
    function setPaymentMethod($payment)
    {
        $this->payment = $payment;
        // dd($this->payment);
    }

    #[On('update-atendees')]
    function recordKeeping($atendee, $index, $position)
    {
        $this->atendeesRecords[$position] = $atendee[$index];
    }

    function bookEvent()
    {
        // dd($this->atendeesRecords);

        $this->validate([
            'payment' => 'required',
            'delivery' => 'required'
        ]);

        if (sizeof($this->atendeesRecords) !==  $this->totalQuantity) {
            $this->addError('mismatch', 'Please fill all data');
            return;
        }

        DB::transaction(function () {

            $order = Order::create([
                'event_id' => $this->event->id,
                'total' => $this->totalAmount,
                'is_email_opted' => $this->delivery == 'email' ? true : false,
                'is_sms_opted' => $this->delivery == 'sms' ? true : false,
                'is_whatsapp_opted' => $this->delivery == 'whatsapp' ? true : false,
                'payment_method' => $this->payment,
            ]);

            $this->billing->order_id = $order->id;
            $this->billing->save();

            foreach ($this->atendeesRecords as $atendee) {
                $printData = array_filter($atendee, function ($at) {
                    return $at !== 'ticketId';
                }, ARRAY_FILTER_USE_KEY);
                $booking = Booking::create([
                    'order_id' => $order->id,
                    'ticket_id' => $atendee['ticketId'],
                    'print_data' => json_encode($printData),
                ]);
            }
        });

        // dd('Here');

        return redirect()->route('home')->with('booked','Successfully Booked');
    }

    function showModal()
    {
        $this->dispatch('refresh');
        $this->dispatch('openmodal');
    }

    function addBillingInformation()
    {
        $this->validate([
            'billing.name' => 'required',
            'billing.phone' => 'required',
            'billing.email' => 'required|email'
        ]);
    }

    public function render()
    {
        return view('livewire.pages.booking-page')->layout('layouts.default');
    }
}

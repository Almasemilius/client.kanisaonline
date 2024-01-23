<?php

namespace App\Livewire;

use App\Models\Currency;
use App\Models\Event;
use App\Models\ExtraBookingInfo;
use App\Models\Ticket;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddTicket extends Component
{
    use WithFileUploads;
    public Event $event;
    public Ticket $ticket;
    public $type;
    public $saleEndDate;
    public $saleEndTime;
    public $saleStartDate;
    public $saleStartTime;
    public $artwork;
    public $ebdStartTime;
    public $ebdStartDate;
    public $ebdEndDate;
    public $ebdEndTime;
    public $paidValue = false;
    public $freeValue = true;
    public $enabledDiscount = false;
    public $disabledDiscount = true;
    public array $printData;
    public array $errors;
    public array $requiredData;
    public array $requiredPrinting = [];

    protected $rules = [
        'ticket.title' => 'required',
        'ticket.description' => 'required',
        'ticket.price' => 'nullable|numeric',
        'ticket.currency_code' => 'nullable|exists:currencies,name',
        'ticket.availability' => 'required',
        'ticket.units_available' => 'integer|nullable',
        'ticket.availability_per_customer' => 'required',
        'ticket.units_per_customer' => 'integer|nullable',
        'ticket.units_reserved' => 'nullable|integer',
        'ticket.required_data_guide' => 'nullable',
        'ticket.print_data_guide' => 'nullable',
        'ticket.ebd_availability' => 'nullable',
        'ticket.ebd_type' => 'nullable',
        'ticket.ebd_amount' => 'nullable',
        'ticket.ebd_start_date' => 'nullable',
        'ticket.ebd_end_date' => 'nullable',
        'ticket.height' => 'nullable',
        'ticket.width' => 'nullable',
        // 'ticket.ebd_type' => 'nullable',
        // 'ticket.ebd_amount' => 'nullable',
        'artwork' => 'required|image',
        'saleEndDate' => 'required|after:saleStartDate',
        'saleEndTime' => 'required',
        'saleStartDate' => 'required|after:yesterday',
        'saleStartTime' => 'required',
        'ebdStartTime' => 'nullable',
        'ebdStartDate' => 'nullable',
        'ebdEndDate' => 'nullable',
        'ebdEndTime' => 'nullable',
    ];

    function mount(Event $event, $ticket = null)
    {
        $this->event = $event;

        if ($ticket) {
            $this->ticket = $ticket;
            $this->saleStartDate = Carbon::make($this->ticket->sales_start_date)->format('Y-m-d');
            $this->saleStartTime = Carbon::make($this->ticket->sales_start_date)->format('H:i');

            $this->saleEndDate = Carbon::make($this->ticket->sales_end_date)->format('Y-m-d');
            $this->saleEndTime = Carbon::make($this->ticket->sales_end_date)->format('H:i');

            $this->ebdStartDate = Carbon::make($this->ticket->ebd_start_date)->format('Y-m-d');
            $this->ebdStartTime = Carbon::make($this->ticket->ebd_start_date)->format('H:i');
            
            $this->ebdEndDate = Carbon::make($this->ticket->ebd_end_date)->format('Y-m-d');
            $this->ebdEndTime = Carbon::make($this->ticket->ebd_end_date)->format('H:i');
            if($this->ticket->type == 'Paid'){
                $this->paidValue = true;
                $this->freeValue = false;
            }else{
                $this->paidValue = false;
                $this->freeValue = true;
            }
            if($this->ticket?->ebd_start_date){
                 $this->enabledDiscount = true;
                 $this->disabledDiscount = false;
            }
            
        } else {

            $this->ticket = new Ticket();
            $this->ticket->currency_code = Currency::where('name', 'TSH')->first()->name;
            // dd($this->ticket);
            $this->ticket->price = 0;
            $this->ticket->availability = 'Limited';
            $this->ticket->availability_per_customer = 'Limited';
        }
    }

    function addVariables($field)
    {
        dd($field);
    }

    public function addPrintData($id)
    {
        // dd($id);
        dd($this->requiredPrinting);
    }

    function addTicket()
    {
        dd($this->saleStartTime);

        $this->validate();
        $this->errors = $this->getErrorBag()->messages();
        if ($this->ticket->availability == 'Unlimited') {
            $this->ticket->units_available = null;
        }
        if ($this->ticket->availability_per_customer == 'Unlimited') {
            $this->ticket->units_per_customer = null;
        }

        $extension = $this->artwork->getClientOriginalExtension();
        $now = now()->toISOString();
        $fileName = Str::slug($this->ticket->title . $now)  . '.' . $extension;
        $this->artwork->storeAs('public/tickets', $fileName);
        $this->ticket->tempelate_url = $fileName;

        $startDay = Carbon::parse($this->saleStartDate . ' ' . $this->saleStartTime);
        $this->ticket->sales_start_date = $startDay;
        $endDay = Carbon::parse($this->saleEndDate . ' ' . $this->saleEndTime);
        $this->ticket->sales_end_date = $endDay;

        $ebdStartDay = Carbon::parse($this->ebdStartDate . ' ' . $this->ebdStartTime);
        $this->ticket->ebd_start_date = $ebdStartDay;
        $ebdEndDay = Carbon::parse($this->ebdEndDate . ' ' . $this->ebdEndTime);
        $this->ticket->ebd_end_date = $ebdEndDay;


        $this->paidValue == true ? $this->ticket->type = 'Paid' : $this->ticket->type = 'Free';
        $this->ticket->event_id = $this->event->id;
        $this->ticket->print_data_guide = json_encode($this->requiredPrinting, true);
        $this->ticket->required_data_guide = json_encode($this->requiredData, true);

        $this->ticket->save();
        return redirect()->route('ticket.management', $this->event->id);
    }

    function updatedPaidValue()
    {
        if ($this->paidValue == true) $this->freeValue = false;
    }
    function updatedFreeValue()
    {
        if ($this->freeValue == true) {
            $this->paidValue = false;
            $this->ticket->price = 0;
        }
    }
    function updatedEnabledDiscount()
    {
        if ($this->enabledDiscount == true) {
            $this->disabledDiscount = false;
        } else {
            $this->disabledDiscount = true;
        }
    }
    function updatedDisabledDiscount()
    {

        if ($this->disabledDiscount == true) {
            $this->enabledDiscount = false;
        } else {
            $this->enabledDiscount = true;
        }
    }

    // function setType()
    // {
    //     dd("Free");
    // }
    public function render()
    {
        if ($this->ticket->availability == 'Unlimited') $this->ticket->units_available = '';
        if ($this->ticket->availability_per_customer == 'Unlimited') $this->ticket->units_per_customer = '';
        $extraFields = ExtraBookingInfo::get();
        $currencies = Currency::get();
        // dd($extraFields);
        return view('livewire.add-ticket', compact('extraFields', 'currencies'));
    }
}

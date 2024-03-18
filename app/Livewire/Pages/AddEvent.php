<?php

namespace App\Livewire\Pages;

use App\Models\ServiceEvent;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddEvent extends Component
{
    use WithFileUploads;
    
    public ServiceEvent $event;
    public $start_date;
    public $end_date;
    public $start_time;
    public $end_time;
    public $image;
    public $image_url = null;

    protected function rules()
    {
        return [
            'event.name' => 'required',
            'event.minister' => 'required',
            'event.description' => 'required',
            'event.location' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_time' => 'required|time',
            'end_time' => 'required|time',
            'image' => 'required'
        ];
    }

    function mount($event = null)
    {
        if($event){
            $this->event = $event;
            $this->image_url = $event->image_url;
            $this->start_date = Carbon::make($event->start_date)->toDateString();
            $this->end_date = Carbon::make($event->end_date)->toDateString();
            $this->start_time = Carbon::make($event->start_date)->format('H:i');
            $this->end_time = Carbon::make($event->end_date)->format('H:i');
        }else{

            $this->event = new ServiceEvent();
        }
    }

   

    function firstStep()
    {
        $this->validate(
            [
                'event.name' => 'required',
                'event.minister' => 'required',
                'event.description' => 'required',
            ]
        );
        $this->dispatch('next');
    }

    function addEvent()
    {
        if($this->image){
            $extension = $this->image->getClientOriginalExtension();
            $now = now()->toISOString();
            $fileName = Str::slug($this->event->name . $now)  . '.' . $extension;
            $this->image->storeAs('public/events', $fileName);
            $this->event->image_url = $fileName;
        }

        $startDay = Carbon::parse($this->start_date . ' ' . $this->start_time);
        // $this->ticket->sales_start_date = $startDay;
        $endDay = Carbon::parse($this->end_date . ' ' . $this->end_time);
        $this->event->start_date = $startDay;
        $this->event->end_date = $endDay;

        $this->event->save();
        // dd("Here");

        $this->resetEvent();

        return redirect()->route('events.list');



        // dd($startDay);

    }

    function resetEvent() {
        $this->image = '';
        $this->event = new ServiceEvent();

    }

    public function render()
    {
        return view('livewire.pages.add-event');
    }
}

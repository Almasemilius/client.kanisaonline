<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Organizer;
use App\Models\Sponsor;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddEvent extends Component
{
    use WithFileUploads;
    public $startDate;
    public $startTime;
    public $endDate;
    public $endTime;
    public $description;
    public $refund;
    public $thumbnail;
    public array $selectedSponsors = array();

    public Event $event;

    protected $rules = [
        'event.organizer_id' => 'required',
        'event.event_type_id' => 'required',
        'event.category_id' => 'required',
        'event.title' => 'required',
        'description' => 'required',
        'event.timezone' => 'required',
        'event.latitude' => 'required|numeric',
        'event.longitude' => 'required|numeric',
        'event.venue_address' => 'required',
        'event.more_info_link' => 'required',
        'startDate' => 'required|date|after:yesterday',
        'endDate' => 'nullable|date|after:startDate',
        'thumbnail' => 'nullable|image',
    ];

    function mount($event = null)
    {
        if($event){
            $this->event = $event;
            $this->description = $this->event->description;
            $this->refund = $this->event->refund_policy;

            $this->startDate = Carbon::make($this->event->start_date_time)->format('Y-m-d');
            $this->startTime = Carbon::make($this->event->start_date_time)->format('H:i');

            $this->endDate = Carbon::make($this->event->end_date_time)->format('Y-m-d');
            $this->endTime = Carbon::make($this->event->end_date_time)->format('H:i');
            // $this->selectedSponsors = $event?->sponsors?->toArray();
        }else{
            $this->event = new Event();
        }
    }

    function addEvent()
    {
        
        $this->validate();

        $extension = $this->thumbnail->getClientOriginalExtension();
        $now = now()->toISOString();
        $fileName = Str::slug( $this->event->title . $now) . '.' . $extension;
        $this->thumbnail->storeAs('public/events', $fileName);
        $this->event->thumbnail_url = $fileName;

        $startDay = Carbon::parse($this->startDate . ' ' . $this->startTime);
        $this->event->start_date_time = $startDay;
        if ($this->endDate) {
            $endDay = Carbon::parse($this->endDate . ' ' . $this->endTime);
            $this->event->end_date_time = $endDay;
        }

        $this->event->description = $this->description;
        $this->event->refund_policy = $this->refund;

        $this->event->save();

        foreach($this->selectedSponsors as $key=> $sponsor){
            $id = Sponsor::where('name',$sponsor)->first()->id;
            
            $this->event->sponsor()->attach(
                $id
            );
        };
        

        $this->thumbnail = null;
        $this->event = new Event();
        return redirect()->route('events.management');

    }

    public function render()
    {
        $organizers = Organizer::get();
        $eventTypes = EventType::get();
        $categories = Category::get();
        $sponsors = Sponsor::get();
        return view('livewire.pages.add-event', compact('organizers', 'eventTypes', 'categories','sponsors'));
    }
}

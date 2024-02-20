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

class AddPublication extends Component
{
    use WithFileUploads;
    public $description;
    public $thumbnail;

    protected $rules = [
        
    ];

    function mount($event = null)
    {
        
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
        return view('livewire.pages.add-publication', compact('organizers', 'eventTypes', 'categories','sponsors'));
    }
}

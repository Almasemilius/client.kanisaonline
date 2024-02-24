<?php

namespace App\Livewire\Pages;

use App\Models\Category;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Organizer;
use App\Models\Publication;
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
    public Publication $publication;

    public $test = "Test String";

    protected $rules = [
        'publication.title' => 'required',
        'thumbnail' => 'required',
        'publication.author' => 'required',
        'publication.category' => 'required',
        'publication.attachment_type' => 'required',
        'publication.link' => 'required',
    ];

    function mount($publication = null)
    {
        if ($publication) {
            $this->publication = $publication;
        } else {
            $this->publication = new Publication();
        }
    }

    function addPublication()
    {
        $this->validate();
        // dd($this->description);
        if ($this->thumbnail) {
            $extension = $this->thumbnail->getClientOriginalExtension();
            $name = $this->publication->title . '.' . $extension;
            // $this->thumbnail->storeAs(path: 'publications', name: $name);
            $this->thumbnail->storeAs('public/publications', $name);

            $this->publication->thumbnail = $name;
        }
        $this->publication->description = $name;

        $this->publication->save();
        $this->resetPublication();
        return redirect()->route('add.publication');
    }

    function resetPublication()
    {
        $this->publication = new Publication();
    }


    function addEvent()
    {

        $this->validate();

        $extension = $this->thumbnail->getClientOriginalExtension();
        $now = now()->toISOString();
        $fileName = Str::slug($this->event->title . $now) . '.' . $extension;
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

        foreach ($this->selectedSponsors as $key => $sponsor) {
            $id = Sponsor::where('name', $sponsor)->first()->id;

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
        return view('livewire.pages.add-publication', compact('organizers', 'eventTypes', 'categories', 'sponsors'));
    }
}

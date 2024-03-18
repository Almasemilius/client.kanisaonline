<?php

namespace App\Livewire;

use App\Models\ChurchService;
use App\Models\Report;
use App\Models\ServiceEvent;
use Livewire\Component;

class AddReport extends Component
{
    public Report $report;

    public $event;

    protected $rules = [
        'report.men' => 'required',
        'report.women' => 'required',
        'report.children' => 'required',
        'report.guests' => 'required',
        'report.online' => 'required',
        'report.deliverance' => 'required',
        'report.filled_with_holy_spirit' => 'required',
        'report.baptism' => 'required',
        'report.offerings' => 'required',
        'report.tithe' => 'required',
        'report.special_offerings' => 'required',
        'report.others' => 'required',
        'report.expenses' => 'required',
        'report.sales' => 'required',
        'report.start_date' => 'required',
        'report.end_date' => 'required',
    ];

    function mount()
    {
        $this->report = new Report();
    }

    function firstStep()
    {
        $this->dispatch('next');
    }

    function addReport()
    {
        $res = explode('-', $this->event);
        if ($res[0] == 'event') {
            $this->report->service_event_id = $res[1];
            $this->report->save();
            return redirect()->route('view.event',$res[1]);
        } elseif ($res[0] == 'service') {
            $this->report->church_service_id = $res[1];
            $this->report->save();
            return redirect()->route('view.service',$res[1]);

        }
        // dd($this->report);

    }

    public function render()
    {
        $events = ServiceEvent::get();
        $services = ChurchService::get();

        return view('livewire.add-report', compact('events', 'services'));
    }
}

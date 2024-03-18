<?php

namespace App\Livewire;

use App\Models\ChurchService;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddService extends Component
{
    use WithFileUploads;
    public $image;
    public $start_date;
    public $start_time;
    public $end_date;
    public $end_time;
    public $image_url;
    public ChurchService $service;

    function rules()
    {
        return [
            'service.name' => 'required',
            'service.type' => 'required',
            'service.description' => 'required',
            'service.minister_type' => 'nullable',
            'service.minister_name' => 'nullable',
            'service.target_type' => 'nullable',
            'service.target_name' => 'nullable',
            'service.location' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ];
    }
  
    function mount($service = null)
    {
        if($service){
            $this->service = $service;
            $this->image_url = $service->image_url;
            $this->start_date = Carbon::make($service->start_date)->toDateString();
            $this->end_date = Carbon::make($service->end_date)->toDateString();
            $this->start_time = Carbon::make($service->start_date)->format('H:i');
            $this->end_time = Carbon::make($service->end_date)->format('H:i');

        }else{
            $this->service = new ChurchService();
        }
    }
    function firstStep()
    {
        $this->dispatch('next');
    }

    function addService()
    {
        if($this->image){
            $extension = $this->image->getClientOriginalExtension();
            $now = now()->toISOString();
            $fileName = Str::slug($this->service->name . $now)  . '.' . $extension;
            $this->image->storeAs('public/services', $fileName);
            $this->service->image_url = $fileName;
        }

        $startDay = Carbon::parse($this->start_date . ' ' . $this->start_time);
        // $this->ticket->sales_start_date = $startDay;
        $endDay = Carbon::parse($this->end_date . ' ' . $this->end_time);
        $this->service->start_date = $startDay;
        $this->service->end_date = $endDay;

        // dd($this->service);

        $this->service->save();

        $this->resetService();

        return redirect()->route('list.service');

        // dd("Here");

    }

    function resetService() {
        $this->service = new ChurchService();
        $this->start_date = '';
        $this->end_date = '';
        $this->end_time = '';
        $this->start_time = '';
        $this->image = '';
    }

    public function render()
    {
        return view('livewire.add-service');
    }
}

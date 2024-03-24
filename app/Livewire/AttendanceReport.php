<?php

namespace App\Livewire;

use App\Models\ChurchService;
use App\Models\Report;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AttendanceReport extends Component
{
    public $member_group;
    public function render()
    {

        $currentYear = Carbon::now()->year;

        $countsForAllMonthsHolyMass = array_fill(1, 12, 0);


        // Holy Mass
        // Fetch counts from the services table grouped by month and service type (Holy Mass)
        $countsByMonthHolyMass = ChurchService::select(
            DB::raw('SUM(CASE WHEN type = "Holy Mass" THEN 1 ELSE 0 END) as holy_mass_count'),
            DB::raw('MONTH(start_date) as month')
        )
            ->whereYear('start_date', $currentYear)
            ->where('type', 'Holy Mass')
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->orderBy(DB::raw('MONTH(start_date)'))
            ->pluck('holy_mass_count', 'month')
            ->toArray();

        // Create an array with counts for each month and service type
        foreach (range(1, 12) as $month) {
            $countsForAllMonthsHolyMass[$month] = $countsByMonthHolyMass[$month] ?? 0;
        }


        $holyMass = [
            'label' => 'Holy Mass',
            'data' => array_values($countsForAllMonthsHolyMass),
            'fill' => false,
            'borderColor' => 'rgb(75, 192, 192)',
            'tension' =>  0.1,
        ];


        // Confession
        $countsForAllMonthsConfession = array_fill(1, 12, 0);

        $countsByMonthConfession = ChurchService::select(
            DB::raw('SUM(CASE WHEN type = "Confession" THEN 1 ELSE 0 END) as confession_count'),
            DB::raw('MONTH(start_date) as month')
        )
            ->whereYear('start_date', $currentYear)
            ->where('type', 'Confession')
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->orderBy(DB::raw('MONTH(start_date)'))
            ->pluck('confession_count', 'month')
            ->toArray();

        foreach (range(1, 12) as $month) {
            $countsForAllMonthsConfession[$month] = $countsByMonthConfession[$month] ?? 0;
        }

        $confession = [
            'label' => 'Confession',
            'data' => array_values($countsForAllMonthsConfession),
            'fill' => false,
            'borderColor' => 'rgb(715, 92, 19)',
            'tension' =>  0.1,
        ];


        // Consultation
        $countsForAllMonthsconsultation = array_fill(1, 12, 0);

        $countsByMonthConsultation = ChurchService::select(
            DB::raw('SUM(CASE WHEN type = "Consultation" THEN 1 ELSE 0 END) as consultation_count'),
            DB::raw('MONTH(start_date) as month')
        )
            ->whereYear('start_date', $currentYear)
            ->where('type', 'Consultation')
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->orderBy(DB::raw('MONTH(start_date)'))
            ->pluck('consultation_count', 'month')
            ->toArray();

        foreach (range(1, 12) as $month) {
            $countsForAllMonthsConsultation[$month] = $countsByMonthConsultation[$month] ?? 0;
        }

        $consultation = [
            'label' => 'Consultation',
            'data' => array_values($countsForAllMonthsConsultation),
            'fill' => false,
            'borderColor' => 'rgb(92, 22, 223)',
            'tension' =>  0.1,
        ];


        // total

        $countsForAllMonthsServices = array_fill(1, 12, 0);

        // Fetch counts from the services table grouped by month
        $countsByMonthServices = ChurchService::select(
            DB::raw('COUNT(*) as service_count'),
            DB::raw('MONTH(start_date) as month')
        )
            ->whereYear('start_date', $currentYear)
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->pluck('service_count', 'month')
            ->toArray();

        // Update counts obtained from the database in the initialized array
        for ($month = 1; $month <= 12; $month++) {
            $countsForAllMonthsServices[$month] = $countsByMonthServices[$month] ?? 0;
        }

        // dd($countsForAllMonthsServices);

        $total = [
            'label' => 'Total',
            'data' => array_values($countsForAllMonthsServices),
            'fill' => false,
            'borderColor' => 'rgb(220, 443, 123)',
            'tension' =>  0.1,
        ];

        // dd($consultation);


        // Guests
        $guest = Report::select(DB::raw('SUM(guests) as total_guests'), DB::raw('MONTH(start_date) as month'))
            ->whereYear('start_date', $currentYear)
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->orderBy(DB::raw('MONTH(start_date)'))
            ->pluck('total_guests', 'month')
            ->toArray();



        // Create an array with counts for each month, setting counts to zero for months with no data
        $guestsCount = [];
        for ($month = 1; $month <= 12; $month++) {
            array_push($guestsCount, $guest[$month] ?? 0);
        }

        $guest = [
            'label' => 'Guests',
            'data' => $guestsCount,
            'fill' => false,
            'borderColor' => 'rgb(75, 192, 192)',
            'tension' =>  0.1,
        ];

        // Online

        $online = Report::select(DB::raw('SUM(online) as total_online'), DB::raw('MONTH(start_date) as month'))
            ->whereYear('start_date', $currentYear)
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->orderBy(DB::raw('MONTH(start_date)'))
            ->pluck('total_online', 'month')
            ->toArray();



        // Create an array with counts for each month, setting counts to zero for months with no data
        $onlineCount = [];
        for ($month = 1; $month <= 12; $month++) {
            array_push($onlineCount, $online[$month] ?? 0);
        }

        $online = [
            'label' => 'Online',
            'data' => $onlineCount,
            'fill' => false,
            'borderColor' => 'rgb(75, 192, 192)',
            'tension' =>  0.1,
        ];

        $onlineData = [
            $online
        ];

        // Baptized
        $baptized = Report::select(DB::raw('SUM(baptism) as total_baptism'), DB::raw('MONTH(start_date) as month'))
            ->whereYear('start_date', $currentYear)
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->orderBy(DB::raw('MONTH(start_date)'))
            ->pluck('total_baptism', 'month')
            ->toArray();


        // Create an array with counts for each month, setting counts to zero for months with no data
        $baptizedCount = [];
        for ($month = 1; $month <= 12; $month++) {
            array_push($baptizedCount, $baptized[$month] ?? 0);
        }

        $baptism = [
            'label' => 'Baptized',
            'data' => $baptizedCount,
            'fill' => false,
            'borderColor' => 'rgb(75, 192, 192)',
            'tension' =>  0.1,
        ];

        // dd($baptism);

        $baptismData = [
            $baptism
        ];


        $attendendanceData = [
            $holyMass,
            $confession,
            $consultation,
            $total
        ];

        $guestData = [$guest];




        $users = User::query();

        $users->when($this->member_group == 'Male', function ($query) {
            $query->where('gender', 'Male');
        })->when($this->member_group == 'Female', function ($query) {
            $query->where('gender', 'Female');
        });

        // $data = [];
        // $deliveranceData = [];
        // $baptismData = [];
        return view('livewire.attendance-report', compact('users', 'attendendanceData', 'guestData', 'onlineData','baptismData'));
    }
}

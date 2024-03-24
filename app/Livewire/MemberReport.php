<?php

namespace App\Livewire;

use App\Models\Report;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MemberReport extends Component
{
    public $member_group;
    public function render()
    {
        $currentYear = Carbon::now()->year;

        // Report Parameters


        // Converts Report
        $deliverance = Report::select(DB::raw('SUM(deliverance) as total_deliverance'), DB::raw('MONTH(start_date) as month'))
            ->whereYear('start_date', $currentYear)
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->orderBy(DB::raw('MONTH(start_date)'))
            ->pluck('total_deliverance', 'month')
            ->toArray();



        // Create an array with counts for each month, setting counts to zero for months with no data
        $deliveranceCount = [];
        for ($month = 1; $month <= 12; $month++) {
            array_push($deliveranceCount, $deliverance[$month] ?? 0);
        }

        $deliverance = [
            'label' => 'Deliverance',
            'data' => $deliveranceCount,
            'fill' => false,
            'borderColor' => 'rgb(75, 192, 192)',
            'tension' =>  0.1,
        ];

        $deliveranceData = [
            $deliverance
        ];

        // Baptism

        $baptism = Report::select(DB::raw('SUM(baptism) as total_baptism'), DB::raw('MONTH(start_date) as month'))
            ->whereYear('start_date', $currentYear)
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->orderBy(DB::raw('MONTH(start_date)'))
            ->pluck('total_baptism', 'month')
            ->toArray();



        // Create an array with counts for each month, setting counts to zero for months with no data
        $baptismCount = [];
        for ($month = 1; $month <= 12; $month++) {
            array_push($baptismCount, $baptism[$month] ?? 0);
        }

        $baptism = [
            'label' => 'baptism',
            'data' => $baptismCount,
            'fill' => false,
            'borderColor' => 'rgb(75, 192, 192)',
            'tension' =>  0.1,
        ];

        $baptismData = [
            $baptism
        ];

        $converts = Report::select(DB::raw('COUNT(*) as count'), DB::raw('MONTH(start_date) as month'))
            ->whereYear('start_date', $currentYear)
            ->groupBy(DB::raw('MONTH(start_date)'))
            ->orderBy(DB::raw('MONTH(start_date)'))
            ->pluck('count', 'month')
            ->toArray();

        $convertsCount = [];
        for ($month = 1; $month <= 12; $month++) {
            array_push($convertsCount, $converts[$month] ?? 0);
        }

        $converts = [
            'label' => 'Converts',
            'data' => $convertsCount,
            'fill' => false,
            'borderColor' => 'rgb(75, 192, 192)',
            'tension' =>  0.1,
        ];

        $convertsData = [
            $converts
        ];


        // List of users to display at the bottom
        $users = User::query();

        $users->when($this->member_group == 'Male', function ($query) {
            $query->where('gender', 'Male');
        })->when($this->member_group == 'Female', function ($query) {
            $query->where('gender', 'Female');
        });

        $users = $users->paginate(10);


        // Fetch users grouped by month
        $menByMonth = User::select(DB::raw('COUNT(*) as count'), DB::raw('MONTH(created_at) as month'))
            ->whereYear('created_at', $currentYear)
            ->where('gender', 'Male')
            ->where('role', 'Member')
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->pluck('count', 'month')
            ->toArray();

        $femaleByMonth = User::select(DB::raw('COUNT(*) as count'), DB::raw('MONTH(created_at) as month'))
            ->whereYear('created_at', $currentYear)
            ->where('gender', 'Female')
            ->where('role', 'Member')
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->pluck('count', 'month')
            ->toArray();

        // Create an array with counts for each month, setting counts to zero for months with no users
        $menCount = [];
        for ($month = 1; $month <= 12; $month++) {
            // $countsForAllMonths[$month] = $menByMonth[$month] ?? 0;
            array_push($menCount, $menByMonth[$month] ?? 0);
        }

        $femaleCount = [];
        for ($month = 1; $month <= 12; $month++) {
            // $countsForAllMonths[$month] = $menByMonth[$month] ?? 0;
            array_push($femaleCount, $femaleByMonth[$month] ?? 0);
        }
        // dd($femaleCount);
        $men = [
            'label' => 'Men',
            'data' => $menCount,
            'fill' => false,
            'borderColor' => 'rgb(75, 192, 192)',
            'tension' =>  0.1,
        ];
        $female = [
            'label' => 'Female',
            'data' => $femaleCount,
            'fill' => false,
            'borderColor' => 'rgb(755, 152, 122)',
            'tension' =>  0.1,
        ];

        $data = [
            $men, $female
        ];

        return view('livewire.member-report', compact('data', 'users', 'deliveranceData','baptismData'));
    }
}

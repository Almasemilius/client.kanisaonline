<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $sponsors = [
            [
                'name' => 'Pepsi',
                'logo_url' => 'Ipsa vitae in lorem2023-11-08T04:33:03.225624Z.jpg',
            ],
            [
                'name' => 'Cocacola',
                'logo_url' => 'Ipsa vitae in lorem2023-11-08T04:33:03.225624Z.jpg',
            ],
            [
                'name' => 'LG',
                'logo_url' => 'Ipsa vitae in lorem2023-11-08T04:33:03.225624Z.jpg',
            ],
        ];

        foreach($sponsors as $sponsor){
            Sponsor::create(
                $sponsor
            );
        }
    }
}

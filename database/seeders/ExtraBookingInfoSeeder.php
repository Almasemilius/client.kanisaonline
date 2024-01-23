<?php

namespace Database\Seeders;

use App\Models\ExtraBookingInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraBookingInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => 'Name',
                'type' => 'String',
            ],
            [
                "name" => 'Job Title',
                'type' => 'String',
            ],
            [
                "name" => 'QR-CODE',
                'type' => 'String',
            ],
        ];

        foreach ($datas as $data) {
            ExtraBookingInfo::create(
                $data
            );
        }
    }
}

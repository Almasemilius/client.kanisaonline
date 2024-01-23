<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            [
                'code' => 'Tsh',
                'name' => 'TSH',
            ],
            [
                'code' => 'USD',
                'name' => 'USD',
                
            ],
        ];

        foreach ($currencies as $currency) {
            Currency::create(
                $currency
            );
        }
    }
}

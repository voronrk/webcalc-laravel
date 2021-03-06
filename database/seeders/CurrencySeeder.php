<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ar = [
            [
                'title' => 'RUR',
                'value' => 1,
            ],
            [
                'title' => 'USD',
                'value' => 65,
            ],
            [
                'title' => 'EUR',
                'value' => 70
            ],
        ];
        foreach($ar as $item) {
            Currency::create(['title' => $item['title'], 'value' => $item['value']]);
        };
    }
}

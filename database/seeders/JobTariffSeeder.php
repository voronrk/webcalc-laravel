<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobTariff;

class JobTariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ar = [
            [
                'grade' => 1,
                'value' => 47.575, 
            ],
            [
                'grade' => 2,
                'value' => 63.25, 
            ],
            [
                'grade' => 3,
                'value' => 75.9, 
            ],
            [
                'grade' => 4,
                'value' => 95.15, 
            ],
            [
                'grade' => 5,
                'value' => 113.85, 
            ],
            [
                'grade' => 6,
                'value' => 126.5
            ],
        ];
        foreach($ar as $item) {
            JobTariff::create(['grade' => $item['grade'], 'value' => $item['value']]);
        };
    }
}

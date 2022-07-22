<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Worker;

class WorkerSeeder extends Seeder
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
                'position' => 'Печатник CitiLine 5 разряд',
                'grade' => '5',
            ],
            [
                'position' => 'Печатник CitiLine 4 разряд',
                'grade' => '4',
            ],
            [
                'position' => 'Печатник CitiLine 3 разряд',
                'grade' => '3',
            ],
        ];
        foreach($ar as $item) {
            Worker::create(['position' => $item['position'], 'jobtariff_grade' => $item['grade']]);
        };
    }
}

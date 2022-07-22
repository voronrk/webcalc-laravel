<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Краска ролевая чёрная'],
            ['title' => 'Краска ролевая голубая'],
            ['title' => 'Краска ролевая желтая'],
            ['title' => 'Краска ролевая пурпурная'],
            ['title' => 'Бумага газетная 42 г 76 см'],
            ['title' => 'Форма 608х844 CityLine СТР "Kaizen"'],
        ];
        foreach($data as $item) {
            Material::create(['title' => $item['title']]);
        };
    }
}

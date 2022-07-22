<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Группа',
                'slug' => 'group',
            ],
            [
                'title' => 'Тип',
                'slug' => 'type',
            ],
            [
                'title' => 'Название',
                'slug' => 'title',
            ],
            [
                'title' => 'Единица измерения основная',
                'slug' => 'mainUnit',
            ],
            [
                'title' => 'Цена',
                'slug' => 'price',
            ],
            [
                'title' => 'Валюта',
                'slug' => 'currency',
            ],
            [
                'title' => 'Норма расхода',
                'slug' => 'usageRate',
            ],
            [
                'title' => 'Плотность',
                'slug' => 'basicWeight',
            ],
            [
                'title' => 'Ширина',
                'slug' => 'width',
            ],
            [
                'title' => 'Длина',
                'slug' => 'height',
            ],
            [
                'title' => 'Цвет',
                'slug' => 'color',
            ],
        ];
        foreach($data as $item) {
            Property::create(['title' => $item['title'], 'slug' => $item['slug']]);
        };
    }
}

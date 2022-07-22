<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MaterialProperty;

class MaterialPropertySeeder extends Seeder
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
                'material_id' => 1,
                'property_id' => 1,
                'value' => "Краска",
            ],
            [
                'material_id' => 1,
                'property_id' => 2,
                'value' => "ролевая",
            ],
            [
                'material_id' => 1,
                'property_id' => 3,
                'value' => "Краска ролевая чёрная",
            ],
            [
                'material_id' => 1,
                'property_id' => 4,
                'value' => "кг",
            ],
            [
                'material_id' => 1,
                'property_id' => 5,
                'value' => "1.62",
            ],
            [
                'material_id' => 1,
                'property_id' => 6,
                'value' => "EUR",
            ],
            [
                'material_id' => 1,
                'property_id' => 11,
                'value' => "черный",
            ],
        ];
        foreach($data as $item) {
            MaterialProperty::create(['material_id' => $item['material_id'], 'property_id' => $item['property_id'], 'value' => $item['value']]);
        };
    }
}

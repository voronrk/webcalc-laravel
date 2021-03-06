<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JobTariffSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(WorkerSeeder::class);
        $this->call(PropertySeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(MaterialPropertySeeder::class);
    }
}

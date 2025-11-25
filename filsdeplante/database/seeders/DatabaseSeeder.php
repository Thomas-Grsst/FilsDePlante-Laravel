<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PlantSeeder::class);
        
        $this->call(PlantCareSeeder::class);

        $this->call(GuideSeeder::class);
    }
}
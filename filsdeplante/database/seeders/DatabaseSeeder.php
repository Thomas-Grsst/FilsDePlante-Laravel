<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // D'abord les plantes
        $this->call(PlantSeeder::class);
        
        // Ensuite les soins (qui dépendent des plantes)
        $this->call(PlantCareSeeder::class);
    }
}
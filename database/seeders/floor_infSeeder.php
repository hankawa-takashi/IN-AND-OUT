<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\Config;

class floor_infSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Config::factory(10)->create();
        
        Floor::factory()->count(10)->create();

    }
}

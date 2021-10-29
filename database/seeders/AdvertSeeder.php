<?php

namespace Database\Seeders;

use App\Models\Advert;
use App\Models\Neighborhood;
use Illuminate\Database\Seeder;

class AdvertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advert::factory()->count(10)
        ->create([
            'host_id' => 1
        ]);
    }
}

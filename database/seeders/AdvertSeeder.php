<?php

namespace Database\Seeders;

use App\Models\Advert;
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
        Advert::factory()->count(15)
        ->create([
            'host_id' => 1
        ])->each(function($advert){
            $advert->reviews()->attach(1, [
                'rating' => rand(1, 5)
            ]);
            $advert->bookmarks()->attach(1);
        });
    }
}

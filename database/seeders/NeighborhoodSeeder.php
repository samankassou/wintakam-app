<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Neighborhood;
use Illuminate\Database\Seeder;

class NeighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $garoua = City::firstWhere('name', 'Garoua');
        $maroua = City::firstWhere('name', 'Maroua');
        $douala = City::firstWhere('name', 'Douala');
        $yaounde = City::firstWhere('name', 'Yaoundé');

        Neighborhood::insert([
            [
                'name' => 'Djamboutou',
                'city_id' => $garoua->id
            ],
            [
                'name' => 'Plateau',
                'city_id' => $garoua->id
            ],
            [
                'name' => 'Deido',
                'city_id' => $douala->id
            ],
            [
                'name' => 'Bonapriso',
                'city_id' => $douala->id
            ],
            [
                'name' => 'Bastos',
                'city_id' => $yaounde->id
            ],
            [
                'name' => 'Ngoa',
                'city_id' => $yaounde->id
            ],
            [
                'name' => 'Domayo',
                'city_id' => $maroua->id
            ],
            [
                'name' => 'doualaré',
                'city_id' => $maroua->id
            ],
        ]);
    }
}

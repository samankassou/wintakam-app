<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['name' => 'Villa'],
            ['name' => 'Maison'],
            ['name' => 'Chambre simple'],
            ['name' => 'Chambre moderne'],
            ['name' => 'Appartement'],
            ['name' => 'Studio'],
            ['name' => 'Location de vacances'],
            ['name' => 'Cité'],
        ]);
    }
}

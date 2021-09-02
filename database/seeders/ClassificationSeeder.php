<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classification::create([
            'name' => 'Fishes',
        ]);
        
        Classification::create([
            'name' => 'Birds',
        ]);

        Classification::create([
            'name' => 'Mammals',
        ]);

        Classification::create([
            'name' => 'Arachnids',
        ]);

        Classification::create([
            'name' => 'Crustaceans',
        ]);

        Classification::create([
            'name' => 'Reptiles',
        ]);

        Classification::create([
            'name' => 'Amphibians',
        ]);

        Classification::create([
            'name' => 'Coelenterates',
        ]);

        Classification::create([
            'name' => 'Worms',
        ]);

        Classification::create([
            'name' => 'Mollusks',
        ]);

        Classification::create([
            'name' => 'Echinoderms',
        ]);

        Classification::create([
            'name' => 'Myriapods',
        ]);

        Classification::create([
            'name' => 'Insects',
        ]);


        
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();
        // $train = new Train();
        // $train->agency = 'trenitalia';
        // $train->departure_station = 'Roma';
        // $train->arrival_station = 'Milano';
        // $train->departure_time = '14:30:45';
        // $train->arrival_time = '17:30:45' ;
        // $train->train_code = 3847838;
        // $train->number_of_carriages = 34;
        // $train->on_time = true;
        // $train->cancelled = false;
        // $train->save();

        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->agency = fake()->company();
            $train->departure_station = fake()->city();
            $train->arrival_station = fake()->city();
            $train->departure_time = fake()->time();
            $train->arrival_time = fake()->time() ;
            $train->train_code = fake()->ean8();
            $train->number_of_carriages = fake()->numberBetween(2, 30);
            $train->on_time = fake()->boolean(80);
            $train->cancelled = fake()->boolean(30);
            $train->save();
        }
    }
}

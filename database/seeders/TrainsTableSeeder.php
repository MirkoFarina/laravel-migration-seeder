<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->word();
            $new_train->departure_station = $faker->word();
            $new_train->arrival_station = $faker->word();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->trains_code = $faker->ean8();
            $new_train->number_coaches = $faker->numberBetween(1,100);
            $new_train->save();
        }
    }
}

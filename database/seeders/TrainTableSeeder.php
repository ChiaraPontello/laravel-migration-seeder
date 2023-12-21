<?php

namespace Database\Seeders;

use App\Models\House

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->agency = $faker->company();
            $train->departure_station = $faker->city();
            $train->date = $faker->date();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->stops = $faker->numberBetween(1,5);
            $train->train_code = $faker->bothify('??-###');
            $train->number_carriages = $faker->rnumberBetween(1, 10);
            $train->in_time = $faker->boolean([true, false]);
            $train->deleted = $faker->boolean([true, false]);
            $train->save();
        }
    }
}

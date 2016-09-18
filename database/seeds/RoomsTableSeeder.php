<?php

use Illuminate\Database\Seeder;
use App\Models\Room;
use Faker\Factory as Faker;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

        for ($i=0; $i < 100; $i++) {
            $room = Room::create([
                'name' => $faker->word,
                'house_id' => rand(1, 50),
                'description' => $faker->realText(255, 2),
                'is_acitve' => rand(0,1),
                'created_at' => $faker->dateTimeThisYear($max = 'now')
            ]);
        }
    }
}

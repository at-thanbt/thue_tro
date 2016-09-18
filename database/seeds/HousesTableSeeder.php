<?php

use Illuminate\Database\Seeder;
use App\Models\House;
use Faker\Factory as Faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

        for ($i=0; $i < 50; $i++) {
            $house = House::create([
                'user_id' => rand(1, 50),
                'category_id' => rand(1, 15),
                'number_room' => rand(5, 20),
                'avatar' => $faker->image,
                'address' => $faker->address,
                'price' => rand(600,1000),
                'created_at' => $faker->dateTimeThisYear($max = 'now')
            ]);
        }
    }
}

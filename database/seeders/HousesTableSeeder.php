<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        /*    $houses = config('houses_data.houses');
 */

        /*      foreach ($houses as $house) {
            $new_house = new House();
            $new_house->image = $house['image'];
            $new_house->reference = $house['reference'];
            $new_house->address = $house['address'];
            $new_house->city = $house['city'];
            $new_house->state = $house['state'];
            $new_house->post_code = $house['post_code'];
            $new_house->square_meters = $house['square_meters'];
            $new_house->floors = $house['floors'];
            $new_house->bathrooms = $house['bathrooms'];
            $new_house->rooms = $house['rooms'];
            $new_house->energy_rating = $house['energy_rating'];
            $new_house->type = $house['type'];
            $new_house->description = $house['description'];
            $new_house->price = $house['price'];
            $new_house->is_available = $house['is_available'];
            // Add a save instruction
            $new_house->save();
        } */


        /* Option 2 with Faker */


        for ($i = 0; $i < 10; $i++) {
            $house = new House();
            $house->reference = $faker->bothify('??-#########');
            $house->address = $faker->streetAddress();
            $house->image = $faker->imageUrl(400, 300, 'Houses', true, $house->address, true, 'jpg');
            $house->city = $faker->city();
            $house->state = $faker->state();
            $house->post_code = $faker->postcode();
            $house->square_meters = $faker->numberBetween(100, 800);
            $house->floors = $faker->numberBetween(1, 5);
            $house->bathrooms = $faker->numberBetween(1, 10);
            $house->rooms = $faker->numberBetween(3, 10);
            $house->energy_rating = $faker->randomElement(['A+++', 'B', 'C', 'D']);
            $house->type = $faker->randomElement(['Building', 'Villa', 'House', 'Detached house', 'semi-detached house', 'apartment']);
            $house->description = $faker->realText(300);
            $house->price = $faker->randomFloat(2, 100000, 5000000);
            // Add a save instruction
            $house->save();
        }
    }
}

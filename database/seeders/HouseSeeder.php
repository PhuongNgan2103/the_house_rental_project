<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $house = new House();
            $house->owner_id = 1;
            $house->name = "House $i";
            $house->room_type_id = rand(1,5);
            $house->address = "House address $i";
            $house->numberBedRoom = rand(1,10);
            $house->numberBathRoom = rand(1,3);
            $house->desc = "Default desc $i";
            $house->status_id = rand(1,3);
            $house->pricePerDay = rand(100000,300000);
            $house->save();
        }
    }
}

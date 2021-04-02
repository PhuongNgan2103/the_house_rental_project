<?php

namespace Database\Seeders;

use App\Models\HouseStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(RoomTypeSeeder::class);
        $this->call(HouseStatusSeeder::class);
        $this->call(HouseImageSeeder::class);
        $this->call(HouseSeeder::class);
    }
}

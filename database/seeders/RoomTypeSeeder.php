<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Phòng đơn',
            'Phòng đôi',
            'Phòng Luxury',
            'Phòng VIP',
            'Phòng tổng thống'
        ];

        foreach ($types as $type) {
            $newRoomType = new RoomType();
            $newRoomType->typeName = $type;
            $newRoomType->save();
        }
    }
}

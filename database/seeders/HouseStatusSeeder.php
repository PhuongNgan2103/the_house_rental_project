<?php

namespace Database\Seeders;

use App\Models\HouseStatus;
use Illuminate\Database\Seeder;

class HouseStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new HouseStatus();
        $status->status = 'Còn trống';
        $status->save();

        $status1 = new HouseStatus();
        $status1->status = 'Đã thuê';
        $status1->save();

        $status2 = new HouseStatus();
        $status2->status = 'Đang nâng cấp';
        $status2->save();
    }
}

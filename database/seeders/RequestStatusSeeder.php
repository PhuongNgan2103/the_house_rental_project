<?php

namespace Database\Seeders;

use App\Models\RequestStatus;
use Illuminate\Database\Seeder;

class RequestStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new RequestStatus();
        $status->status = 'Đang chờ';
        $status->save();

        $status1 = new RequestStatus();
        $status1->status = 'Đã chấp nhận';
        $status1->save();

        $status2 = new RequestStatus();
        $status2->status = 'Đã từ chối';
        $status2->save();

        $status3 = new RequestStatus();
        $status3->status = 'Đã hủy';
        $status3->save();
    }
}

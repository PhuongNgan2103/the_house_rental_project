<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestRentalHouseRequest;
use App\Models\RentalRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RentalRequestController extends Controller
{
    public function list()
    {
        $rentalRequests = DB::table('rental_requests')->where('owner_house_id', Auth::id())->get();
        return view('user.rental_request', compact('rentalRequests'));
    }

    public function myList()
    {
        $rentalRequests = DB::table('rental_requests')->where('request_user_id', Auth::id())->get();
        return view('user.rental_request', compact('rentalRequests'));
    }

    public function create($houseId, RequestRentalHouseRequest $request)
    {
        $house = DB::table('houses')->find($houseId);
        if ($house->status_id == 1) {

            $startDate = new Carbon($request->rentalStartDate, 'Asia/Ho_Chi_Minh');
            $endDate = new Carbon($request->rentalEndDate, 'Asia/Ho_Chi_Minh');
            $today = Carbon::now('Asia/Ho_Chi_Minh');

            $diffStartAndEndDay = $startDate->diffInDays($endDate, false);
            $diffTodayAndStartDay = $today->diffInDays($startDate, false);
            $diffTodayAndStartHour = $today->diffInHours($startDate, false);

            if ($diffTodayAndStartDay > 0 || ($diffTodayAndStartDay == 0 && $diffTodayAndStartHour > 0)) {

                if ($diffStartAndEndDay > 0) {
                    $rentalRequest = new RentalRequest();
                    $rentalRequest->request_user_id = Auth::id();
                    $rentalRequest->owner_house_id = $house->owner_id;
                    $rentalRequest->house_id = $houseId;
                    $rentalRequest->startDate = $request->rentalStartDate;
                    $rentalRequest->endDate = $request->rentalEndDate;
                    $rentalRequest->status_id = 1;
                    $rentalRequest->save();
                    return redirect()->route('house.list');
                } else {
                    return back()->withErrors([
                        'rentalEndDate' => 'Ngày kết thúc phải lớn hơn ngày bắt đầu!'
                    ]);
                }
            } else {
                return back()->withErrors([
                    'rentalStartDate' => 'Ngày bắt đầu không thể ở quá khứ hoặc hôm nay!'
                ]);
            }
        }

        return back()->withErrors([
            'request' => 'Căn nhà đã được thuê hoặc đang nâng cấp!'
        ]);
    }

    public function update($id)
    {
        $rentalRequest = DB::table('rental_requests')->find($id);

        $startDate = new Carbon($rentalRequest->startDate, 'Asia/Ho_Chi_Minh');
        $today = Carbon::now('Asia/Ho_Chi_Minh');

        $diffTodayAndStartDay = $today->diffInDays($startDate, false);
        $diffTodayAndStartHour = $today->diffInHours($startDate, false);

        if ($diffTodayAndStartDay > 3 || ($diffTodayAndStartDay == 1 && $diffTodayAndStartHour > 0)) {
            DB::table('rental_requests')->where('id',$id)->update(['status_id' => 4]);
            return back()->withErrors([
                'rentalRequest_' . $id => 'Hủy thuê nhà thành công !'
            ]);
        } else {
            return back()->withErrors([
                'rentalCancel_' . $id => 'Bạn chỉ có thể hủy thuê trước một ngày !'
            ]);
        }
    }
}

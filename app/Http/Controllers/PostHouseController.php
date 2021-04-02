<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostUpdate;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostHouseController extends Controller
{
    public function getAllPost()
    {
        $houses = DB::table('houses')->where('owner_id',Auth::id())->get();
        return view('posts.listPost',compact('houses'));
    }

    public function infoPost($id)
    {
        $house = DB::table('houses')->find($id);
        return view('posts.infoPost',compact('house'));
    }

    public function update($id, PostUpdate $request)
    {
        $house = DB::table('houses')->find($id);
        if($house->status_id == 2){
            return back()->withErrors([
                'status' => 'Phòng đã có người thuê'
            ]);
        }
        DB::table('houses')->where('id',$id)->update(['status_id' => $request->status_id]);
        return back();
    }

}

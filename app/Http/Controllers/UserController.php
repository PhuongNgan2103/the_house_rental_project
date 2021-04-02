<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function showPageUserProfile(){
        return view('user.profile');
    }

    public function updateProfile(UpdateProfileRequest $request){
        $user = Auth::user();
        if ($request->phone == $user->phone && $request->email == $user->email && $request->address == $user->address && $request->fullname == $user->fullname && $request->avatar == ''){
            Session::flash('message_2','Không có thông tin nào được cập nhật');
            return redirect()->back();
        } else {
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->fullname = $request->fullname;
            if ($request->avatar != ''){
                $user->avatar = $request->avatar;
            }
            $user->save();
            $request->session()->flash('message_1','Cập nhật thành công');
            return redirect()->back();
        }
    }

    public function showPageChangePassword(){
        return view('user.change_password');
    }

    public function changePassword(ChangePasswordRequest $request){
        $current_password = $request->current_password;
        $new_password = $request->new_password;
        $password_confirm = $request->password_confirm;
        if ($new_password == $password_confirm){
            if (Hash::check($current_password, Auth::user()->password)){
                if ($current_password != $new_password){
                    $user = Auth::user();
                    $user->password = Hash::make($request->new_password);
                    $user->save();
                    Auth::logout();
                    Session::flash('message_4','Đổi mật khẩu thành công');
                    return redirect()->route('auth.login');
                }
                Session::flash('message_2','Mật khẩu này đã tồn tại');
                return redirect()->back();
            }
            Session::flash('message_1','Mật khẩu bạn nhập không tồn tại');
            return redirect()->back();
        }
        Session::flash('message_3','Vui lòng nhập mật khẩu khớp với nội dung phía trên');
        return redirect()->back();
    }
}

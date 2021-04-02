<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function showPageLogin()
    {
        return view('login');
    }

    public function login(LoginUserRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {
            $request->session()->regenerate();

            return redirect()->route('house.list'); // đường dẫn sau khi login ở đây
        }

        return back()->withErrors([
            'username' => 'Tên người dùng hoặc mật khẩu sai !',
        ]);
    }

    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogleCallBack()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('auth.login');
        }

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $newUser = new User();
            $newUser->username = $user->email;
            $newUser->password = Hash::make('password');
            $newUser->email = $user->email;
            $newUser->save();

            auth()->login($newUser, true);
        }

        return redirect()->route('home');

    }

    public function showPageRegister()
    {
        return view('register');
    }

    public function register(RegisterUserRequest $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->save();
        $request->session()->flash('message','Đăng ký thành công. Vui lòng đăng nhập để bắt đầu');
        return redirect()->route('auth.login');
    }

    public function logout(){
        Auth::logout();
        Session::flash('message_1','Đăng xuất thành công');
        return redirect()->route('auth.login');
    }

}

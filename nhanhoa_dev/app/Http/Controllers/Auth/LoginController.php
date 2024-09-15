<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();


            // Tìm hoặc tạo người dùng
            $authUser = User::where('google_id', $user->id)->first();
            if (!$authUser) {

                $authUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'role_id' => 2,
                    'is_active' => 1
                ]);
            }


            Auth::login($authUser, true);

            return redirect()->route('page.home')->with('success', 'Đăng nhập thành công!');
        } catch (\Exception $e) {
            return redirect()->route('form_login')->withErrors(['message' => 'Đăng nhập thất bại.']);
        }
    }
}

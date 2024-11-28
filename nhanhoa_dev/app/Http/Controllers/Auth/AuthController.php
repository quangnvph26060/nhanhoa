<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function login(Request $request)
    {
        try {
            $credentials = $request->only(['email', 'password']);

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                //  dd($user);
                if ($user->is_active == 1) {
                    if ($user->role_id == 1 || $user->role_id == 2) {
                        Log:info(1);
                        return redirect()->route('admin.dashboard')->with('successlogin', 'Chào mừng trở lại !');
                    } elseif ($user->role_id == 3) {
                        return redirect()->route('page.home');
                    }
                }else{
                    return back()->withErrors(['email' => 'Tài khoản chưa được kích hoạt.']);
                }
            } else {
                Log::info("aaaaa");
                return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng.']);
            }
        } catch (\Exception $e) {
            Log::error("Lỗi đăng nhập: " . $e->getMessage());
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('form_login');
    }

    public function register(Request $request)
    {
        $tt = $request->all();
        $register = $this->userService->register($tt);
    }
}

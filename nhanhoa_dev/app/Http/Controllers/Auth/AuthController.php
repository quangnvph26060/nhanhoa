<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function login(Request $request)
    {

        // dd($request->all());
        try {
            $credentials = $request->only(['email', 'password']);

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                // dd($user);
                if ($user->is_active == 1) {
                    if ($user->role_id == 1 || $user->role_id == 2) {
                        return redirect()->route('admin.dashboard')->with('successlogin', 'Chào mừng trở lại !');
                    } elseif ($user->role_id == 3) {
                        return redirect()->route('page.home');
                    }
                }else{
                    return back()->withErrors(['email' => 'Tài khoản chưa được kích hoạt.']);
                }
            } else {
                // Nếu xác thực thất bại
                return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng.']);
            }
        } catch (\Exception $e) {
            return $this->handleLoginError($request, $e);
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

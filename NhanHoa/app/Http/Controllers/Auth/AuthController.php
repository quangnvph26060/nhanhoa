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

                if ($user->role_id == 1) {
                    return redirect()->route('admin.dashboard')->with('successlogin', 'Chào mừng trở lại !, Admin!');
                } elseif ($user->role_id == 2) {
                    return redirect()->route('staff.index');
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

    
}

<?php

namespace App\Services;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserService
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function authenticateUser($credentials)
    {
        // dd($credentials);
        $user = User::where('email', $credentials['email'])->orwhere('phone',$credentials['email'])->first();
        if (!$user) {
            throw new Exception('Not an User');
        }
        $userRoleId = $user->role_id;
        if ($userRoleId != 1 && $userRoleId != 2 && $userRoleId != 3) {
            throw new Exception('Not authorized');
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            Log::info('User logged in successfully', ['user' => $user]);
            throw new Exception('Unauthorized');
        }

        Auth::login($user);
        return ['user' => $user];
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}

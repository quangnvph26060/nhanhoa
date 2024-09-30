<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (auth()->check()) {
            // Kiểm tra xem role_id có thuộc vào danh sách được cho phép hay không
            foreach ($roles as $role) {
                if (auth()->user()->role_id == $role) {
                    return $next($request); // Nếu có, cho phép truy cập
                }
            }
        }

        return redirect()->back()->with('error', 'Bạn không có quyền truy cập');
    }
}

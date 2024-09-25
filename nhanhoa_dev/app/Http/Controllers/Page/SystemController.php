<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function showServerCluster()
    {
        return view('client/solution/server-cluster');
    }

    // Trang Giải pháp bảo mật
    public function showSecuritySolutions()
    {
        return view('client.solution.security-solutions');
    }

    // // Trang Cân bằng tải hệ thống
    public function showLoadBalancing()
    {
        return view('client.solution.load-balancing');
    }

    // // Trang Chống DDoS
    public function showDDoSProtection()
    {
        return view('client.solution.ddos-protection');
    }

    // // Trang Tư vấn thiết kế hệ thống mạng
    public function showNetworkConsulting()
    {
        return view('client.solution.network-consulting');
    }
}

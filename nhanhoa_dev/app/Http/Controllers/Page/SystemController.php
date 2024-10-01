<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\SgoGiaiphap;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function showServerCluster($slug, $id)
    {
        $giaiphap = SgoGiaiphap::find($id);
        // return view('client/solution/server-cluster', compact('giaiphap'));
        return view('client.pages.giaiphap.detail.detail', compact('giaiphap'));
    }

    // // Trang Giải pháp bảo mật
    // public function showSecuritySolutions()
    // {
    //     return view('client.solution.security-solutions');
    // }

    // // // Trang Cân bằng tải hệ thống
    // public function showLoadBalancing()
    // {
    //     return view('client.solution.load-balancing');
    // }

    // // // Trang Chống DDoS
    // public function showDDoSProtection()
    // {
    //     return view('client.solution.ddos-protection');
    // }

    // // // Trang Tư vấn thiết kế hệ thống mạng
    // public function showNetworkConsulting()
    // {
    //     return view('client.solution.network-consulting');
    // }
}

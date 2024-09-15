<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Services\SslService;
use Illuminate\Http\Request;

class SslController extends Controller
{
    protected $sslService;
    public function __construct(SslService $sslService){
        $this->sslService = $sslService;
    }
    public function comodo()
    {
        $title = 'Lựa chọn gói dịch vụ Comodo SSL cho bạn';
        $ssls = $this->sslService->getSslByType(1);
        return view('client.pages.ssl-comodo.index', compact('title', 'ssls'));
    }
    public function geotrust()
    {
        $title = 'Lựa chọn gói dịch vụ Geotrust SSL cho bạn';
        $ssls = $this->sslService->getSslByType(2);
        return view('client.pages.ssl-geotrust.index', compact('title', 'ssls'));
    }
    public function symantec()
    {
        $title = 'Lựa chọn gói dịch vụ Digicert SSL cho bạn';
        $ssls = $this->sslService->getSslByType(3);
        return view('client.pages.ssl-symantec.index', compact('title', 'ssls'));
    }

    public function pay(Request $request){
        $sslPay = $this->sslService->PaySsl($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }
}

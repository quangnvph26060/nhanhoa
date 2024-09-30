<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\CustomerReview;
use App\Models\Footer;
use App\Services\ClientService;
use App\Services\SslService;
use Illuminate\Http\Request;

class SslController extends Controller
{
    protected $sslService;
    protected $clientService;
    public function __construct(SslService $sslService, ClientService $clientService){
        $this->sslService = $sslService;
        $this->clientService = $clientService;
    }
    public function comodo()
    {
        $title = 'Lựa chọn gói dịch vụ Comodo SSL cho bạn';
        $ssls = $this->sslService->getSslByType(1);
        $customerreivew  = CustomerReview::get();
        $footers = Footer::get();
        return view('client.pages.ssl-comodo.index', compact('title', 'ssls', 'customerreivew', 'footers'));
    }
    public function geotrust()
    {
        $title = 'Lựa chọn gói dịch vụ Geotrust SSL cho bạn';
        $ssls = $this->sslService->getSslByType(2);
        $customerreivew  = CustomerReview::get();
        $footers = Footer::get();
        return view('client.pages.ssl-geotrust.index', compact('title', 'ssls', 'customerreivew', 'footers'));
    }
    public function symantec()
    {
        $title = 'Lựa chọn gói dịch vụ Digicert SSL cho bạn';
        $ssls = $this->sslService->getSslByType(3);
        $customerreivew  = CustomerReview::get();
        $footers = Footer::get();
        return view('client.pages.ssl-symantec.index', compact('title', 'ssls', 'customerreivew', 'footers'));
    }

    public function pay(Request $request){
        $sslPay = $this->sslService->PaySsl($request->all());
        // $client = $this->clientService->createClient($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }
}

<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Services\ClientService;
use App\Services\HostingService;
use Illuminate\Http\Request;

class HostingController extends Controller
{
    protected $hostingService;

    protected $clientService;
    public function __construct(HostingService $hostingService, ClientService $clientService){
        $this->hostingService = $hostingService;
        $this->clientService = $clientService;
    }
    public function linux()
    {
        $hosting = $this->hostingService->getHostingByType(2);
        $titleSection  = "Bảng giá Hosting Linux";
        $title = 'Hosting giá rẻ chất lượng cao';
        return view('client.pages.linux-hosting.index', compact('titleSection', 'hosting', 'title'));
    }

    public function windows()
    {
        $titleSection   = "Bảng giá Hosting Windows";
        $hosting = $this->hostingService->getHostingByType(1);
        $title = 'Hosting giá rẻ chất lượng cao';
        return view('client.pages.windows-hosting.index', compact('titleSection', 'hosting', 'title'));
    }

    public function pay(Request $request){
        $hostingPay = $this->hostingService->payHosting($request->all());
        $client = $this->clientService->createClient($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }
}

<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Services\DomainService;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    protected $domainService;
    public function __construct(DomainService $domainService){
        $this->domainService = $domainService;
    }
    public function index()
    {
        $doaminqt = $this->domainService->getDomainByType(1);
        $doaminvn = $this->domainService->getDomainByType(2);
        $domainall = $this->domainService->getDomainAll();
        $title = "Mua đăng ký tên miền";
        $footers = Footer::get();
        return view('client.pages.domain-register.index',compact('doaminqt', 'doaminvn', 'title', 'footers', 'domainall' ));
    }

    public function domainPay(Request $request){
        // $client = $this->clientService->createClient($request->all());
        $domainpay = $this->domainService->payDomain($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }
}

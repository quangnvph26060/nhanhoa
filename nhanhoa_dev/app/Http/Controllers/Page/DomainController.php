<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
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
        $title = "Mua đăng ký tên miền";
        return view('client.pages.domain-register.index',compact('doaminqt', 'doaminvn', 'title'));
    }
}

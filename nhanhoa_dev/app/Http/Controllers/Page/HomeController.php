<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Cloud;
use App\Services\DomainService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $domainService;
    public function __construct(DomainService $domainService){
        $this->domainService = $domainService;
    }
    public function index()
    {
        $user = Auth::user();
        $cloud = Cloud::first();
        $domainqt = $this->domainService->getDomainByTypeTake(1);
        $domainqg = $this->domainService->getDomainByTypeTake(2);
        $title = "Nhân hòa - Nhà cung cấp dịch vụ";
        // dd($domainqg);
        return view('client.pages.home.index', compact('user', 'cloud', 'domainqt', 'domainqg','title' ));
    }
}

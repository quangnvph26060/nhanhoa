<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Cloud;
use App\Services\CloudService;
use App\Services\DomainService;
use App\Services\EmailServerService;
use App\Services\HostingService;
use App\Services\SslService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $domainService;
    protected $cloudService;
    protected $hostingService;
    protected $emailServerService;
    protected $sslService;
    public function __construct(DomainService $domainService, CloudService $cloudService, HostingService $hostingService, EmailServerService $emailServerService, SslService $sslService){
        $this->domainService = $domainService;
        $this->cloudService = $cloudService;
        $this->hostingService = $hostingService;
        $this->emailServerService = $emailServerService;
        $this->sslService = $sslService;
    }
    public function index()
    {
        $user = Auth::user();
       // domain
        $domainqt = $this->domainService->getDomainByTypeTake(1);
        $domainqg = $this->domainService->getDomainByTypeTake(2);
        // cloud
        $cloud = $this->cloudService->getcloudAll();
        // hosting
        $hosting = $this->hostingService->getHostingAll();
        // email
        $email = $this->emailServerService->getAllEmailServers();
        $ssl = $this->sslService->getSslAll();

        $title = "Nhân hòa - Nhà cung cấp dịch vụ";

        return view('client.pages.home.index', compact('user', 'cloud', 'domainqt', 'domainqg','hosting', 'email', 'ssl', 'title' ));
    }
}

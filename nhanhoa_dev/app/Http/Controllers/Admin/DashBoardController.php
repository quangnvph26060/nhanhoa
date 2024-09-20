<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backup365;
use App\Models\Cloud;
use App\Models\EmailServer;
use App\Models\GoogleWorkspace;
use App\Models\GoogleWorkspaceEducation;
use App\Models\Hosting;
use App\Models\Server;
use App\Models\ServerLocation;
use App\Services\ClientService;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    protected $clientService;
    public function __construct(ClientService $clientService){
        $this->clientService = $clientService;
    }
    public function index(){
        $clients = $this->clientService->getClientAll();
        $total = $this->totalPay();
        return view('admin.dashboard.index', compact('clients', 'total'));
    }

    public function totalPay(){
        $serverloaction = ServerLocation::get();
        $server  = Server::get();
        $hosting = Hosting::get();
        $googleBusiness = GoogleWorkspace::get();
        $googleEducation = GoogleWorkspaceEducation::get();
        $email = EmailServer::get();
        $cloud = Cloud::get();
        $backup365 = Backup365::get();
        $total = $serverloaction->count() + $server->count() + $hosting->count() + $googleBusiness->count() + $googleEducation->count() + $email->count() + $backup365->count() + $cloud->count();
        return $total;
    }

}

<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Services\Backup365Service;
use App\Services\ClientService;
use App\Services\ServerService;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    protected $serverService;
    protected $backup365Service;
    protected $clientService;
    public function __construct(ServerService $serverService, Backup365Service $backup365Service, ClientService $clientService){
        $this->serverService = $serverService;
        $this->backup365Service = $backup365Service;
        $this->clientService = $clientService;
    }

    public function dedicatedServer(){
        $servers = $this->serverService->getServerAll();
        $title = "Thuê máy chủ vật lý";
        return view('client.pages.dedicated-server.index', compact('servers', 'title'));
    }
    public function serverLocation(){
        $serverloactions = $this->serverService->getServerLocationAll();
        $title = "Vị trí máy chủ";
        return view('client.pages.server-location.index', compact('serverloactions', 'title'));
    }

    public function serverBackup(){
        $backupservers = $this->backup365Service->getAllBackup365s();
        return view('client.pages.server-backup.index', compact('backupservers'));
    }

    public function serverAdministration(){
        return view('client.pages.server-administration.index');
    }

    public function pay(Request $request){
        $serverPay = $this->serverService->PayServer($request->all());
        $client = $this->clientService->createClient($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }

    public function paylocation(Request $request){
        $serverPay = $this->serverService->PayServerLocation($request->all());
        $client = $this->clientService->createClient($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }

    public function payBackup365(Request $request){
        $serverPay = $this->backup365Service->PayBackup365($request->all());
        $client = $this->clientService->createClient($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }

}

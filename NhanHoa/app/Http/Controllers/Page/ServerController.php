<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Services\backup365Service;
use App\Services\ServerService;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    protected $serverService;
    protected $backup365Service;
    public function __construct(ServerService $serverService, backup365Service $backup365Service){
        $this->serverService = $serverService;
        $this->backup365Service = $backup365Service;
    }

    public function dedicatedServer(){
        $servers = $this->serverService->getServerAll();
        return view('client.pages.dedicated-server.index', compact('servers'));
    }

    public function serverLocation(){
        $serverloactions = $this->serverService->getServerLocationAll();
        //  dd($serverloactions);
        return view('client.pages.server-location.index', compact('serverloactions'));
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
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }

    public function paylocation(Request $request){
        $serverPay = $this->serverService->PayServerLocation($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }

}

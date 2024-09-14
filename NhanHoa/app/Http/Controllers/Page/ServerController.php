<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Services\ServerService;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    protected $serverService;
    public function __construct(ServerService $serverService){
        $this->serverService = $serverService;
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
        return view('client.pages.server-backup.index');
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

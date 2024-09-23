<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Services\ClientService;
use App\Services\CloudBackupService;
use App\Services\cloudService;
use Illuminate\Http\Request;

class CloudController extends Controller
{
    protected $cloudBackupService;
    protected $cloudService;
    protected $clientService;

    public function __construct(CloudBackupService $cloudBackupService, CloudService $cloudService, ClientService $clientService){
        $this->cloudBackupService = $cloudBackupService;
        $this->cloudService = $cloudService;
        $this->clientService = $clientService;
    }
    public function server(){
        $titleSection = "Cloud365 - Bảng Giá Mua Cloud VPS Giá Rẻ";
        $cloud = $this->cloudService->getcloudByType(1);
        $title = "Cloud Server";
        return view('client.pages.cloud-server.index', compact('titleSection', 'cloud', 'title'));
    }

    public function backup(){
        $cloudvps = $this->cloudBackupService->getBackupsByType(1);
        $cloudserver = $this->cloudBackupService->getBackupsByType(2);
        $title = "Cloud Backup";
        return view('client.pages.cloud-backup.index', compact('cloudvps', 'cloudserver', 'title'));
    }

    public function storage(){
        $title = "Cloud Storage";
        return view('client.pages.cloud-storage.index', compact('title'));
    }
    public function international(){
        $cloud = $this->cloudService->getcloudByType(2);
        $title = "Cloud VPS Quốc Tế";
        return view('client.pages.cloud-international.index', compact('cloud', 'title'));
    }

    public function cloudpay(Request $request){
        $serverPay = $this->cloudService->PayCloud($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }

    public function cloudbackuppay(Request $request){
        $serverPay = $this->cloudBackupService->PayBackup($request->all());
        // $client = $this->clientService->createClient($request->all());
        return redirect()->back()->with('success', 'Thông báo thành công!');
    }



}

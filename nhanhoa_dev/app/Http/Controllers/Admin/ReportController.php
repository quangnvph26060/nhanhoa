<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailServer;
use App\Models\EmailServerPay;
use App\Models\GoogleWorkspaceBusinessPay;
use App\Models\GoogleWorkspaceEducation;
use App\Models\GoogleWorkspaceEducationPay;
use App\Models\HostingPay;
use App\Models\ServerLocationPay;
use App\Models\ServerPay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReportController extends Controller
{
    // server
    protected  $perPage = 10;
    public function indexserver(){
        return view('admin.report.server');
    }
    public function listserver(){

        $server = ServerPay::paginate($this->perPage);
        $data = [];
        foreach ($server as $key => $item) {
            $data[] = [
                'name' => $item->name,
                'phone' => $item->phone,
                'email' => $item->email,
                'id' => $item->id,
                'package_name' => $item->server->name // Đặt tên theo quan hệ
            ];
        }

        return response()->json([
            'data' => $data,
            'current_page' => $server->currentPage(),
            'last_page' => $server->lastPage(),
            'per_page' => $server->perPage(),
            'total' => $server->total()
        ]);
    }

    // server location
    public function indexserverlocation(){
        return view('admin.report.serverlocation');
    }
    public function listserverlocation(){
        $perPage = 10;
        $server = ServerLocationPay::paginate($this->perPage);
        $data = [];
        foreach ($server as $key => $item) {
            $data[] = [
                'name' => $item->name,
                'phone' => $item->phone,
                'email' => $item->email,
                'id' => $item->id,
                'package_name' => $item->serverlocation->name // Đặt tên theo quan hệ
            ];
        }

        return response()->json([
            'data' => $data,
            'current_page' => $server->currentPage(),
            'last_page' => $server->lastPage(),
            'per_page' => $server->perPage(),
            'total' => $server->total()
        ]);
    }


    // hosting
    public function indexhosting(){
        return view('admin.report.hosting');
    }
    public function listhosting(){
        $perPage = 10;
        $hosting = HostingPay::paginate($this->perPage);
        $data = [];
        foreach ($hosting as $key => $item) {
            $data[] = [
                'name' => $item->name,
                'phone' => $item->phone,
                'email' => $item->email,
                'id' => $item->id,
                'package_name' => $item->hosting->hostingtype_id == 1
                                ? "Windows Hosting -  " . $item->hosting->name
                                : "Linux Hosting -  " . $item->hosting->name
            ];
        }

        return response()->json([
            'data' => $data,
            'current_page' => $hosting->currentPage(),
            'last_page' => $hosting->lastPage(),
            'per_page' => $hosting->perPage(),
            'total' => $hosting->total()
        ]);
    }

    // google workspace
    public function indexgoogle(){
        return view('admin.report.google');
    }
    public function listbusiness(){
        $business = GoogleWorkspaceBusinessPay::paginate($this->perPage);
        $data = [];
        foreach ($business as $key => $item) {
            $data[] = [
                'name' => $item->name,
                'phone' => $item->phone,
                'email' => $item->email,
                'id' => $item->id,
                'package_name' => $item->business->name
            ];
        }

        return response()->json([
            'data' => $data,
            'current_page' => $business->currentPage(),
            'last_page' => $business->lastPage(),
            'per_page' => $business->perPage(),
            'total' => $business->total()
        ]);
    }

    public function listeducation(){
        $education = GoogleWorkspaceEducationPay::paginate($this->perPage);
        $data = [];
        foreach ($education as $key => $item) {
            $data[] = [
                'name' => $item->name,
                'phone' => $item->phone,
                'email' => $item->email,
                'id' => $item->id,
                'package_name' => $item->education->name
            ];
        }

        return response()->json([
            'data' => $data,
            'current_page' => $education->currentPage(),
            'last_page' => $education->lastPage(),
            'per_page' => $education->perPage(),
            'total' => $education->total()
        ]);
    }

    public function indexemail(){
        return view('admin.report.email');
    }
    public function listemail(){

        $email = EmailServerPay::paginate($this->perPage);
        $data = [];
        foreach ($email as $key => $item) {
            $data[] = [
                'name' => $item->name,
                'phone' => $item->phone,
                'email' => $item->email,
                'id' => $item->id,
                'package_name' => $item->emailserver->name,
            ];
        }

        return response()->json([
            'data' => $data,
            'current_page' => $email->currentPage(),
            'last_page' => $email->lastPage(),
            'per_page' => $email->perPage(),
            'total' => $email->total()
        ]);
    }
}

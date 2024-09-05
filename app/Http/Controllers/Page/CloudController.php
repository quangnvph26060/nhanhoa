<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CloudController extends Controller
{
    public function server(){
        $titleSection   = "Cloud365 - Bảng Giá Mua Cloud VPS Giá Rẻ";
        return view('client.pages.cloud-server.index', compact('titleSection'));
    }

    public function backup(){
        return view('client.pages.cloud-backup.index');
    }

    public function storage(){
        return view('client.pages.cloud-storage.index');
    }
    public function international(){
        return view('client.pages.cloud-international.index');
    }
}

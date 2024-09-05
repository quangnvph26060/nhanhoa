<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServerController extends Controller
{

    public function dedicatedServer(){
        return view('client.pages.dedicated-server.index');
    }

    public function serverLocation(){
        return view('client.pages.server-location.index');
    }

    public function serverBackup(){
        return view('client.pages.server-backup.index');
    }

    public function serverAdministration(){
        return view('client.pages.server-administration.index');
    }
}

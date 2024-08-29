<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServerController extends Controller
{

    public function index(){
        return view('admin.server.index');
    }

    public function addform(){
        return view('admin.server.add');
    }
}

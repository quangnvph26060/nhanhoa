<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function emailServer(){
        return view('client.pages.email-server.index');
    }

    public function googleWorkspace(){
        return view('client.pages.google-workspace.index');
    }
}

<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SslController extends Controller
{
    public function comodo()
    {
        return view('client.pages.ssl-comodo.index');
    }
    public function geotrust()
    {
        return view('client.pages.ssl-geotrust.index');
    }
    public function symantec()
    {
        return view('client.pages.ssl-symantec.index');
    }
}

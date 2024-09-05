<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostingController extends Controller
{
    public function linux()
    {
        $titleSection   = "Bảng giá Hosting Linux";
        return view('client.pages.linux-hosting.index', compact('titleSection'));
    }

    public function windows()
    {
        $titleSection   = "Bảng giá Hosting Windows";

        return view('client.pages.windows-hosting.index', compact('titleSection'));
    }
}

<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function index(){
        return view('client.pages.affiliate.index');
    }

    public function news(){
        return view('client.pages.news.index');
    }

    public function contact(){
        return view('client.pages.contact.index');
    }
}

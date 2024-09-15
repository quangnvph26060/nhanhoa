<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function vfone(){
        return view('client.pages.solution-vivre.index');
    }

    public function esoc(){
        return view('client.pages.solution-electronic-contract.index');
    }
    public function electronicInvoice(){
        return view('client.pages.solution-electronic-invoice.index');
    }
}

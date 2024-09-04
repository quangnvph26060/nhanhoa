<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function vfone(){
        return view('client.pages.solution-vivre.index');
    }
}

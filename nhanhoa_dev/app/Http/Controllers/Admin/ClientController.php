<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        return view('admin.client.index');
    }
    public function listclient(Request $request){
        $perPage = 10;

        $customers = Client:: paginate($perPage);

        return response()->json($customers);

    }
}

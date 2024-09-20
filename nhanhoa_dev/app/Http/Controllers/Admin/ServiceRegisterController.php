<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ServiceRegisterService;
use Illuminate\Http\Request;

class ServiceRegisterController extends Controller
{
    //
    protected $serviceRegisterService;

    public function __construct(ServiceRegisterService $serviceRegisterService){
        $this->serviceRegisterService = $serviceRegisterService;
    }
}

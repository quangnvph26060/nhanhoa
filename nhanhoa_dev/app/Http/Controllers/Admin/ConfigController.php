<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Config;
use App\Services\ConfigService;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    protected $configService;

    public function __construct(ConfigService $configService){
        $this->configService  = $configService;
    }

    public function index(){
         $config = $this->configService->getConfig();
         $bank = Bank::all();
         return view('admin.config.index', compact('config', 'bank'));
    }

    public function update(Request $request){
        // dd($request->all());
        $config = $this->configService->updateConfig($request->all());
        return redirect()->back()->with('success', 'Thay đổi thành công !');
    }
}

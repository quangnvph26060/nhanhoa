<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Config;
use App\Models\Sale;
use App\Services\ConfigService;
use App\Services\HomeService;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    protected $configService;
    protected $homeService;

    public function __construct(ConfigService $configService, HomeService $homeService){
        $this->configService  = $configService;
        $this->homeService  = $homeService;
    }

    public function index(){
         $title = 'Cấu hình';
         $config = $this->configService->getConfig();
         $home = $this->homeService->getConfig();
         $sale = Sale::first();
         $bank = Bank::all();
         return view('admin.config.index', compact('config', 'bank', 'title', 'home', 'sale', 'sale'));
    }

    public function update(Request $request){
        $config = $this->configService->updateConfig($request->all());
        return redirect()->back()->with('success', 'Thay đổi thành công !');
    }

    public function updatehome(Request $request){
        //  dd($request->all());
        $config = $this->homeService->updateConfig($request->all());
        return redirect()->back()->with('success', 'Thay đổi thành công !');
    }

    public function updatesale(Request $request){
        $sale = Sale::first();
        if($sale){
            $sale->update($request->all());
        }else{
            Sale::create($request->all());
        }
        return redirect()->back()->with('success', 'Thay đổi thành công !');
    }
}

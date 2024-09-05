<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hosting;
use App\Models\SgoHostingPromotion;
use App\Services\HostingService;
use App\Services\PromotionService;
use Illuminate\Http\Request;

class HostingController extends Controller
{
    protected $hostingService;
    protected $promotionService;
    public function __construct(HostingService $hostingService, PromotionService $promotionService){
        $this->hostingService = $hostingService;
        $this->promotionService = $promotionService;
    }
    public function index(){
        $hostings = $this->hostingService->getHostingAll();
        return view('admin.hosting.index', compact('hostings'));
    }

    public function getHostingAll(){
        $hostings = $this->hostingService->getHostingAll();
        dd($hostings);
    }

    public function addform(){
        $promotion = $this->promotionService->getPromotionAll();
        return view('admin.hosting.add', compact('promotion'));
    }

    public function addsubmit(Request $request){
        $hosting = $this->hostingService->createHosting($request->all());
        return redirect()->route('admin.hosting.index')->with('success', 'Thêm thành công ! ');
    }

    public function editform($id){
        $hosting = Hosting::find($id);
        $promotions = $this->promotionService->getPromotionAll();
        $hosting_promotion = SgoHostingPromotion::where('hosting_id', $id)->get();
        return view('admin.hosting.edit', compact('hosting', 'promotions', 'hosting_promotion'));
    }

    public function editsubmit(Request $request, $id){
        $hosting = $this->hostingService->updateHosting($request->all(), $id);
        return redirect()->route('admin.hosting.index')->with('success', 'Thay đổi thành công ! ');
    }

    public function delete($id){
        $this->hostingService->deleteHosting($id);
        return redirect()->route('admin.hosting.index')->with('success', 'Xóa thành công ! ');
    }
}

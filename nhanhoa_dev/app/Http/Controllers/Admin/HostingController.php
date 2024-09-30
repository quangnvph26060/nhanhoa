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
        $title = "Hosting";
        $hostings = $this->hostingService->getHostingAll();
        return view('admin.hosting.index', compact('hostings', 'title'));
    }

    public function getHostingAll(){
        $hostings = $this->hostingService->getHostingAll();
        dd($hostings);
    }

    public function addform(){
        $title = "Thêm Hosting";
        $promotion = $this->promotionService->getPromotionAll();
        return view('admin.hosting.add', compact('promotion', 'title'));
    }

    public function addsubmit(Request $request){
        $hosting = $this->hostingService->createHosting($request->all());
        return redirect()->route('admin.hosting.index')->with('success', 'Thêm thành công ! ');
    }

    public function editform($id){
        $title = "Thay đổi Hosting";
        $hosting = Hosting::find($id);
        $promotion = $this->promotionService->getPromotionAll();
        $promotionArray = SgoHostingPromotion::where('hosting_id', $id)->pluck('promotion_id');
        $promotionselect = $promotionArray->toArray();
        return view('admin.hosting.edit', compact('hosting', 'promotion', 'promotionselect', 'title'));
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

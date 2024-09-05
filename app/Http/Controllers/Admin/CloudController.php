<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cloud;
use App\Models\CloudPromotion;
use App\Services\cloudService;
use App\Services\PromotionService;
use Illuminate\Http\Request;

class CloudController extends Controller
{
    protected $cloudService;
    protected $promotionService;
    public function __construct(CloudService $cloudService, PromotionService $promotionService){
        $this->cloudService = $cloudService;
        $this->promotionService = $promotionService;
    }

    public function index(){
        $clouds = $this->cloudService->getcloudAll();
        // dd($clouds[0]->promotion[0]->promotion);
        return view('admin.cloud.index', compact('clouds'));
    }

    public function addform(){
        $promotion = $this->promotionService->getPromotionAll();
        return view('admin.cloud.add', compact('promotion'));
    }

    public function addsubmit(Request $request){
        $this->cloudService->createCloud($request->all());

        return redirect()->route('admin.cloud.index')->with('success', 'Thêm thành công máy chủ ! ');
    }

    public function delete($id){
        $this->cloudService->deleteCloud($id);
        return redirect()->route('admin.cloud.index')->with('success', 'Xóa thành công ! ');
    }

    public function editform($id){
        $cloud = Cloud::find($id);
        $promotion = $this->promotionService->getPromotionAll();
        $promotionselect = CloudPromotion::where('server_id', $id)->pluck('promotion_id')->toArray();
        return view('admin.cloud.edit', compact('cloud', 'promotion', 'promotionselect'));
    }

    public function editsubmit($id, Request $request){
        $cloud = $this->cloudService->updateCloud($request->all(), $id);
        return redirect()->route('admin.cloud.index')->with('success', 'Sửa thành công máy chủ ! ');
    }
}

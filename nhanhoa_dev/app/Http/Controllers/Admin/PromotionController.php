<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Services\PromotionService;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    protected $promotionService;

    public function __construct(PromotionService $promotionService){
        $this->promotionService = $promotionService;
    }
    public function index(){
        $promotions = $this->promotionService->getPromotionAll();
        return view('admin.promotion.index', compact('promotions'));
    }

    public function getSslAll(){
        $promotions = $this->promotionService->getPromotionAll();
        dd($promotions);
    }

    public function addform(){
        return view('admin.promotion.add');
    }

    public function addsubmit(Request $request){
        $promotion = $this->promotionService->createspromotion($request->all());
        return redirect()->route('admin.promotion.index')->with('success', 'Thêm thành công ! ');
    }

    public function editform($id){
        $promotion = Promotion::find($id);
        return view('admin.promotion.edit', compact('promotion'));
    }

    public function editsubmit(Request $request, $id){
        $promotion = $this->promotionService->updatePromotion($request->all(), $id);
        return redirect()->route('admin.promotion.index')->with('success', 'Thay đổi thành công ! ');
    }

    public function delete($id){
        $this->promotionService->deletePromotion($id);
        return redirect()->route('admin.promotion.index')->with('success', 'Xóa thành công ! ');
    }
}

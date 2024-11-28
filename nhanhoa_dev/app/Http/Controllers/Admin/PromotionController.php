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
        $title = "Danh sách khuyễn mại";
        $promotions = $this->promotionService->getPromotionAll();
        return view('admin.promotion.index', compact('promotions', 'title'));
    }

    public function getSslAll(){
        $promotions = $this->promotionService->getPromotionAll();
        dd($promotions);
    }

    public function addform(){
        $title = "Thêm khuyễn mại";
        return view('admin.promotion.add', compact('title'));
    }

    public function addsubmit(Request $request){
        $promotion = $this->promotionService->createspromotion($request->all());
        return redirect()->route('admin.promotion.index')->with('success', 'Thêm thành công ! ');
    }

    public function editform($id){
        $title = "Thay đổi khuyễn mại";
        $promotion = Promotion::find($id);
        return view('admin.promotion.edit', compact('promotion', 'title'));
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

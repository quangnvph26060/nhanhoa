<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CustomerReviewService;
use Illuminate\Http\Request;

class CustomerReviewController extends Controller
{
    protected $reviewService;

    public function __construct(CustomerReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    // Lấy tất cả đánh giá
    public function index()
    {
        $title = "Đánh giá khách hàng";
        $reviews = $this->reviewService->getAllReviews();
       return view('admin.customer.index', compact('title', 'reviews'));
    }

    public function add()
    {
        $title = "Thêm đánh giá";
        return view('admin.customer.add', compact('title'));
    }
    // Thêm đánh giá mới
    public function store(Request $request)
    {
        $data = $request->all();

        $review = $this->reviewService->createReview($data);
        return redirect()->route('admin.reviews.index')->with('success', 'Thêm thành công ! ');
    }

    // Lấy đánh giá theo ID
    public function show($id)
    {
        $title = "Sửa đánh giá";
        $reviews = $this->reviewService->getReviewById($id);

        return view('admin.customer.edit', compact('reviews', 'title'));
    }

    // Cập nhật đánh giá
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $review = $this->reviewService->updateReview($id, $data);
        return redirect()->route('admin.reviews.index')->with('success', 'Thay đổi thành công ! ');
    }

    // Xóa đánh giá
    public function destroy($id)
    {
        $deleted = $this->reviewService->deleteReview($id);
        return redirect()->route('admin.reviews.index')->with('success', 'Xóa thành công ! ');
    }
}

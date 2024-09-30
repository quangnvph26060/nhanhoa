<?php

namespace App\Services;

use App\Models\CustomerReview;
use Illuminate\Support\Facades\Storage;

class CustomerReviewService
{
    // Thêm đánh giá mới
    public function createReview(array $data)
    {
        // Kiểm tra xem có file avatar không
        if (isset($data['avatar'])) {
            $logo = $data['avatar'];
            $directoryPath = 'public/avatar-customer';
            $logoFileName = 'image_' . $logo->getClientOriginalName();
            $logoFilePath = 'storage/avatar-customer/' . $logoFileName;
            Storage::putFileAs('public/avatar-customer', $logo, $logoFileName);
            $data['avatar'] = $logoFilePath;

        }

        return CustomerReview::create($data);
    }

    // Lấy tất cả đánh giá
    public function getAllReviews()
    {
        return CustomerReview::all();
    }

    // Lấy đánh giá theo ID
    public function getReviewById($id)
    {
        return CustomerReview::find($id);
    }

    // Cập nhật đánh giá
    public function updateReview($id, array $data)
    {
            $review = $this->getReviewById($id);

            if (isset($data['avatar'])) {
                $logo = $data['avatar'];
                $logoFileName = 'image_' . $logo->getClientOriginalName();
                $logoFilePath = 'storage/avatar-customer/' . $logoFileName;
                Storage::putFileAs('public/avatar-customer', $logo, $logoFileName);
                $data['avatar'] = $logoFilePath;
            }
            $review->update($data);
            return $review;
    }

    // Xóa đánh giá
    public function deleteReview($id)
    {
        $review = $this->getReviewById($id);
        if ($review) {
            // Xóa avatar khỏi storage
            Storage::disk('public')->delete($review->avatar);

            $review->delete();
            return true;
        }
        return false; // Hoặc xử lý lỗi
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleWorkspace extends Model
{
    use HasFactory;

    protected $table = 'sgo_google_workspace_business';

    // Các trường có thể điền dữ liệu
    protected $fillable = [
        'name',                 // Tên gói
        'price_per_month',       // Giá theo tháng
        'storage_capacity',      // Dung lượng lưu trữ
        'price_first_20_users',  // Giá cho 20 user đầu tiên
        'price_after_20_users',  // Giá cho 21 user trở lên
        'renewal_price',         // Giá gia hạn
        'user_limit',            // Giới hạn số lượng user
        'promotion_id',          // ID chương trình khuyến mãi
    ];
    protected $appends = ['promotion'];

    public function getPromotionAttribute()
    {
        return Promotion::where('id', $this->attributes['promotion_id'])->first();
    }

}

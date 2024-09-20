<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudPromotion extends Model
{
    use HasFactory;
    protected $table = 'sgo_cloud_promotion';

    // Đặt các thuộc tính có thể được điền vào
    protected $fillable = [
        'cloud_id',
        'promotion_id',
    ];

    protected $appends = ['cloud', 'promotion'];

    public function getCloudAttribute()
    {
        return Cloud::where('id', $this->attributes['cloud_id'])->first();
    }

    public function getPromotionAttribute()
    {
        return Promotion::where('id', $this->attributes['promotion_id'])->first();
    }
}

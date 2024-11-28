<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SgoHostingPromotion extends Model
{
    use HasFactory;

    protected $table = 'sgo_hosting_promotion';

    // Đặt các thuộc tính có thể được điền vào
    protected $fillable = [
        'hosting_id',
        'promotion_id',
    ];

    protected $appends = ['hosting', 'promotion'];

    public function getHostingAttribute()
    {
        return Hosting::where('id', $this->attributes['hosting_id'])->first();
    }

    public function getPromotionAttribute()
    {
        return Promotion::where('id', $this->attributes['promotion_id'])->first();
    }
}

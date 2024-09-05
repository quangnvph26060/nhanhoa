<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerPromotion extends Model
{
    use HasFactory;
    protected $table = 'sgo_server_promotion';

    // Đặt các thuộc tính có thể được điền vào
    protected $fillable = [
        'server_id',
        'promotion_id',
    ];

    protected $appends = ['server', 'promotion'];

    public function getServerAttribute()
    {
        return Server::where('id', $this->attributes['server_id'])->first();
    }

    public function getPromotionAttribute()
    {
        return Promotion::where('id', $this->attributes['promotion_id'])->first();
    }
}

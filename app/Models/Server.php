<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $table = "sgo_server";


    protected $fillable = [
        'name',
        'cpu',
        'ssd',
        'ram',
        'data',
        'ip',
        'domestic',
        'international',
        'price'
    ];

    protected $appends = ['promotion'];

    public function getPromotionAttribute()
    {
        return ServerPromotion::where('server_id', $this->attributes['id'])->get();
    }
}

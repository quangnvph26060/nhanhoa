<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerLocationPay extends Model
{
    use HasFactory;

    protected $table = 'sgo_server_location_pay';

    // Các trường có thể gán giá trị hàng loạt
    protected $fillable = [
        'name',
        'phone',
        'email',
        'serverlocation_id',
    ];

    protected $appends = ['serverlocation_id'] ;

    public function getServerlocation_idAttribute()
    {
        return ServerLocation::where('id', $this->attributes['serverlocation_id'])->first();
    }
}

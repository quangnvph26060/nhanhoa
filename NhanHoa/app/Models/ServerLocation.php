<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerLocation extends Model
{
    use HasFactory;

    protected $table = "sgo_server_location";

    protected $fillable = [
        'name',
        'price',
        'bw_in_country',
        'bw_international',
        'data_transfer',
        'rack_space',
        'power_capacity',
        'ups_backup',
        'air_conditioning',
        'network_socket',
        'ip_address',
        'promotion_id'
    ];

    protected $appends = ['promotion'];

    public function getPromotionAttribute()
    {
        return Promotion::where('id', $this->attributes['promotion_id'])->first();
    }
}

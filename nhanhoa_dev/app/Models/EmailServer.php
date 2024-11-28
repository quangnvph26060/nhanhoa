<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailServer extends Model
{
    use HasFactory;

    protected $table = 'sgo_email_server';

    // Khai báo các cột có thể được gán giá trị hàng loạt
    protected $fillable = [
        'name',
        'price',
        'inbox_rate',
        'storage_capacity',
        'unlimited_email_addresses',
        'unlimited_email_forwarder',
        'unlimited_email_list',
        'unlimited_email_domain',
        'ip_address',
        'promotion_id',
        'logo'
    ];

    protected $appends = ['promotion'];

    public function getPromotionAttribute()
    {
        return Promotion::where('id', $this->attributes['promotion_id'])->first();
    }
}

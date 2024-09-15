<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerPay extends Model
{
    use HasFactory;

    protected $table = 'sgo_server_pay';

    // Nếu bạn muốn chỉ định các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'name',
        'phone',
        'email',
        'server_id',
    ];

}

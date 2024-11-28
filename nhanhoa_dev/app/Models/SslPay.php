<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SslPay extends Model
{
    use HasFactory;

    use HasFactory;


    protected $table = 'sgo_ssl_pay';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'sslid',
    ];
}

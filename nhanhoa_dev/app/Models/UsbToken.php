<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsbToken extends Model
{
    use HasFactory;

    protected $table = 'sgo_usb_token';

    // Các trường có thể gán đại trà
    protected $fillable = [
        'package_name',
        'package_price',
        'duration',
        'service_fee',
        'usb_token_price',
    ];
}

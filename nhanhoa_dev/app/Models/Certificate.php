<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table = 'sgo_certificate_price';

    // Các trường có thể gán đại trà
    protected $fillable = [
        'package_name',
        'package_price',
        'duration',
        'service_fee',
    ];
}

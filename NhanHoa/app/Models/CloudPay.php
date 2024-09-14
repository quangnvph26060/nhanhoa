<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudPay extends Model
{
    use HasFactory;

    protected $table = 'sgo_cloud_pay';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'cloud_id',
    ];
}

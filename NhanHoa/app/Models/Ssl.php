<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ssl extends Model
{
    use HasFactory;

    protected $table = "sgo_ssl";


    protected $fillable = [
        'name',
        'price',
        'maintainfee',
        'encoding',
        'certification',
        'numberdomain',
        'sansupport',
        'addressbar',
        'insurance',
        'level',
        'time',
        'ssltype'

    ];
}

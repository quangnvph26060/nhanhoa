<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sgp_sale';

    // Danh sách các cột có thể điền dữ liệu thông qua các phương thức như create()
    protected $fillable = [
        'title',
        'describe',
        'content'
    ];
}

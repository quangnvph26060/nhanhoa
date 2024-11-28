<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    use HasFactory;
    protected $table = 'sgo_customer_reviews';

    // Các trường có thể gán
    protected $fillable = [
        'name',
        'web',
        'content',
        'avatar',
    ];
}

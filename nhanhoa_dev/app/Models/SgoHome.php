<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SgoHome extends Model
{
    use HasFactory;
    protected $table = 'sgo_home';

    // Định nghĩa các thuộc tính có thể được gán hàng loạt (mass assignable)
    protected $fillable = [
        'section1_title',
        'section1_content',

        'section2_title',
        'section2_content',

        'section3_title',
        'section3_content',

        'section4_title',
        'section4_content',

        'section5_title',
        'section5_content',

        'section6_title',
        'section6_content',
        'views'
    ];
}

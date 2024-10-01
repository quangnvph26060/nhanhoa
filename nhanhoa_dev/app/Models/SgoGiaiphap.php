<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SgoGiaiphap extends Model
{
    use HasFactory;
    protected $table = 'sgo_giaiphap';
    protected $fillable = ['title', 'slug', 'content'];
}

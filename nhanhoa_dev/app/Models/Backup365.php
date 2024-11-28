<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backup365 extends Model
{
    use HasFactory;
    protected $table = 'sgo_backup365';
    protected $fillable = [
        'name',
        'storage',
        'price',
        'agent',
        'data_encryption',
        'data_compression',
        'schedule_backup',
        'auto_backup',
    ];
}

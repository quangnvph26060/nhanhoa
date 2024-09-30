<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $table = 'sgo_partners';

    // Định nghĩa các thuộc tính có thể được gán hàng loạt (mass assignable)
    protected $fillable = [
       'name', 'contact_person', 'phone', 'email', 'address', 'logo'
    ];
}

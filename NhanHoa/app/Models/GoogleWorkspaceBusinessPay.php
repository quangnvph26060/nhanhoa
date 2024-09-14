<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleWorkspaceBusinessPay extends Model
{
    use HasFactory;

    protected $table = 'sgo_googleworkspace_business_pay';

    // Các trường có thể gán giá trị (mass assignable)
    protected $fillable = [
        'name',
        'phone',
        'email',
        'googleworkspace_id'
    ];
}

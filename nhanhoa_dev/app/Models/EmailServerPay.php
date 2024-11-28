<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailServerPay extends Model
{
    use HasFactory;
    protected $table = 'sgo_email_server_pay';

    // Các trường có thể gán giá trị (mass assignable)
    protected $fillable = [
        'name',
        'phone',
        'email',
        'emailServer_id'
    ];

    protected $appends = ['emailserver'] ;

    public function getEmailserverAttribute()
    {
        return EmailServer::where('id', $this->attributes['emailServer_id'])->first();
    }
}

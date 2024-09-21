<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = "sgo_config";


    protected $fillable = [
        'logo',
        'icon',
        'receiver',
        'bank_account',
        'qr',
        'bank_id',
        'email',
        'store_name',
        'phone',
        'address'

    ];


    protected $appends = ['bank'];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    // Định nghĩa thuộc tính 'bank'
    public function getBankAttribute()
    {
        return Bank::where('id', $this->attributes['bank_id'])->first();
    }

}

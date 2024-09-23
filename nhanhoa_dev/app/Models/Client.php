<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'sgo_client';
    protected $fillable = ['code', 'name', 'phone', 'email', 'package_name'];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($client) {
            // Lấy mã code lớn nhất hiện có
            $latestClient = Client::orderBy('id', 'desc')->first();
            $latestCode = $latestClient ? $latestClient->code : 'KH00000';

            // Tăng giá trị của mã lên 1
            $number = (int) substr($latestCode, 2) + 1;
            $client->code = 'KH' . str_pad($number, 5, '0', STR_PAD_LEFT);
        });
    }
}

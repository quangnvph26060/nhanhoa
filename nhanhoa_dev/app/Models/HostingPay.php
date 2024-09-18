<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostingPay extends Model
{
    use HasFactory;

    protected $table = 'sgo_hosting_pay';

    // Các thuộc tính có thể được gán giá trị thông qua mass-assignment
    protected $fillable = [
        'name',
        'phone',
        'email',
        'hostingid',
    ];

    protected $appends = ['hosting'];

    public function getHostingAttribute()
    {
        return Hosting::where('id', $this->attributes['hostingid'])->first();
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    use HasFactory;

    protected $table = "sgo_hosting";
    protected $fillable = [
        'name',
        'price',
        'storage',
        'bandwidth',
        'cpu',
        'ram',
        'mysql',
        'ftp_account',
        'domain',
        'subdomain',
        'alias_parked_domain',
        'email_account',
        'hostingtype_id',
    ];

    protected $appends = ['promotion'];

    public function getPromotionAttribute()
    {
        return SgoHostingPromotion::where('hosting_id', $this->attributes['id'])->get();
    }
}

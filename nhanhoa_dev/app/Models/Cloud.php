<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloud extends Model
{
    use HasFactory;
    protected $table = "sgo_cloud";


    protected $fillable = [
        'name',
        'price',
        'cpu',
        'core',
        'ssd',
        'ram',
        'ip',
        'bandwidth',
        'cloudtypes_id',
        'logo'

    ];

    protected $appends = ['promotion'];

    public function getPromotionAttribute()
    {
        return CloudPromotion::where('cloud_id', $this->attributes['id'])->get();
    }


}

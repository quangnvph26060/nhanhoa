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
        'cpu',
        'core',
        'ssd',
        'ram',
        'ip',
        'bandwidth',
        'cloudtypes_id',
        'price'
    ];

    protected $appends = ['cloudtype'];

    public function getCloudtypeAttribute()
    {
        return Cloudtype::where('id', $this->attributes['cloudtypes_id'])->first();
    }


}

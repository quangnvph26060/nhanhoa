<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    protected $table = "sgo_domain";
    protected $fillable = [
        'name',
        'logo',
        'domaintype_id',
        'le_phi',
        'phiduytri',
        'dichvu',
        'dicvunamsau'
    ];

    protected $appends = ['domaintype'];

    public function getDomaintypeAttribute()
    {
        return Domaintype::where('id', $this->attributes['domaintype_id'])->first();
    }
}

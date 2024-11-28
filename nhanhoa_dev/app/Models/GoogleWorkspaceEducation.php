<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleWorkspaceEducation extends Model
{
    use HasFactory;
    protected $table = 'sgo_google_workspace_education';

    protected $fillable = [
        'name',
        'price',
        'describe',
        'storage',
    ];

    protected $appends = ['promotion'];

    public function getPromotionAttribute()
    {
        return Promotion::where('id', $this->attributes['promotion_id'])->first();
    }
}

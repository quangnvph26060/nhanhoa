<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterNew extends Model
{
    use HasFactory;

    protected $table = 'sgo_footer_new';

    protected $fillable = [
        'footer_id',
        'new_id',
    ];

    protected $appends = ['footer', 'new'];

    public function getFooterAttribute()
    {
        return Footer::where('id', $this->attributes['footer_id'])->first();
    }

    public function getNewAttribute()
    {
        return SgoNews::where('id', $this->attributes['new_id'])->first();
    }
}

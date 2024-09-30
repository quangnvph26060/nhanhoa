<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'sgo_footer';

    protected $fillable = [
        'title',
        'description',
    ];

    protected $appends = ['new'];

    public function getNewAttribute()
    {
        return FooterNew::where('footer_id', $this->attributes['id'])->get();
    }


}

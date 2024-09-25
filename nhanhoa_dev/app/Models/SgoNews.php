<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SgoNews extends Model
{
    use HasFactory;
    protected $table = 'sgo_news';

    protected $fillable = ['title', 'logo', 'slug', 'author_id', 'content', 'views', 'count', 'type'];

    protected $appends = ['user'];

    public function getUserAttribute()
    {
        return User::where('id', $this->attributes['author_id'])->first();
    }
}

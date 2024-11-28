<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table = 'sgo_banks';

    protected $fillable = ['name', 'code', 'bin', 'shortName'];

    public function config()
    {
        return $this->hasOne(Config::class);
    }


}

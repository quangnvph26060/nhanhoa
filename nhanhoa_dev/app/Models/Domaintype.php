<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaintype extends Model
{
    use HasFactory;
    protected $table = "sgo_domaintype";


    protected $fillable = [
       'name'
    ];
}

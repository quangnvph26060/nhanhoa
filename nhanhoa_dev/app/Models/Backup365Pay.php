<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backup365Pay extends Model
{
    use HasFactory;

    protected $table = 'sgo_backup365_pay';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'backup365_id'
    ];

    protected $appends = ['backup365'] ;

    public function getBackup365Attribute()
    {
        return Backup365::where('id', $this->attributes['backup365_id'])->first();
    }
}

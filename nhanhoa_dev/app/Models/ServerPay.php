<?php

namespace App\Models;

use App\Models\Server;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerPay extends Model
{
    use HasFactory;

    protected $table = 'sgo_server_pay';

    // Nếu bạn muốn chỉ định các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'name',
        'phone',
        'email',
        'server_id',
    ];
    public function server()
    {
        return $this->belongsTo(Server::class, 'server_id');
    }
    protected $appends = ['server'] ;

    public function getServerAttribute()
    {
        return Server::where('id', $this->attributes['server_id'])->first();
    }

}

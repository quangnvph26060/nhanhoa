<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudBackupPay extends Model
{
    use HasFactory;

    protected $table = 'sgo_cloud_backup_pay';

    // Các cột có thể được mass assignable (tự động điền dữ liệu)
    protected $fillable = [
        'name',
        'email',
        'phone',
        'cloudbackup_id',
    ];
}

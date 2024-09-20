<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CloudBackup extends Model
{
    use HasFactory;
    protected $table = 'sgo_cloud_backup';

    // Các trường có thể được gán giá trị hàng loạt
    protected $fillable = [
        'name',
        'price',
        'package_applied',
        'max_storage',
        'backup_time',
        'backup_count',
        'backuptype'
    ];
}

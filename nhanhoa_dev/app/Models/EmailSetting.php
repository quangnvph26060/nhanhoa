<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSetting extends Model
{
    use HasFactory;
    protected $table = 'sgo_email_settings';
    protected $fillable = [
        'mail_host', 'mail_port', 'mail_username', 'mail_password', 'mail_encryption',
    ];
}

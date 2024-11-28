<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectronicInvoice extends Model
{
    use HasFactory;

    protected $table = 'sgo_electronic_invoice';

    protected $fillable = [
        'invoice_quantity',
        'price',
        'storage_duration',
        'usage_time',
        'storage_space',
        'disk_system',
    ];
}

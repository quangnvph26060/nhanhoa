<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractEsoc extends Model
{
    use HasFactory;
    protected $table = 'sgo_contract_esoc';

    // Các trường có thể được gán giá trị
    protected $fillable = [
        'contract_number',
        'package_name',
        'price',
        'storage_duration',
        'usage_duration',
        'storage_type',
        'storage_system',
        'maintenance_fee',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePricing extends Model
{
    use HasFactory;
    protected $table = 'sgo_service_pricing';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = [
        'name',
        'category_implementation',
        'server_optimization',
        'server_security',
        'backup_configuration',
        'website_data_migration',
        'basic_monitoring',
        'advanced_monitoring',
        'incident_reporting',
        'periodic_reporting_by_email',
        'price',
    ];
}

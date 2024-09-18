<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionCustomer extends Model
{
    use HasFactory;

    protected $table = 'sgo_solution_customers';

    protected $fillable = [
        'solution_id',
        'name',
        'phone',
        'email'
    ];

    public function solution()
    {
        return $this->belongsTo(Solution::class, 'solution_id');
    }
}

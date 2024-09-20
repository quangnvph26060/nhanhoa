<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;

    protected $table = 'sgo_solutions';
    protected $fillable = [
        'name',
        'fee',
        'initialization_fee',
        'branch',
        'record_capacity',
    ];

    public function solutionCustomer()
    {
        return $this->hasMany(SolutionCustomer::class, 'solution_id');
    }
}

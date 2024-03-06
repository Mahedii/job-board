<?php

namespace App\Models\v1\careepick\Employer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEmploymentTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'employment_type_id',
    ];
}

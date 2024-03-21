<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_id',
        'job_category_id',
        'job_title',
        'vacancy',
        'salary_type_id',
        'salary',
        'age_id',
        'job_location',
        'experience_id',
        'published',
        'deadline',
        'education',
        'experience_requirments',
        'additional_requirments',
        'responsibilities',
        'compensation_benefits',
        'job_nature',
        'job_place',
        'job_highlights',
        'slug',
        'remarks',
    ];
}

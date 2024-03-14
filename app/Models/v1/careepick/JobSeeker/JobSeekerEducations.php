<?php

namespace App\Models\v1\careepick\JobSeeker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerEducations extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'job_seeker_id',
        'education_level_id',
        'education_degree_title_id',
        'education_degree_title',
        'education_subjects_id',
        'education_institute_type_id',
        'school_college_id',
        'university_id',
        'education_result_type_id',
        'marks',
        'cgpa',
        'duration',
        'year_of_passing',
        'slug',
        'remarks',
    ];
}

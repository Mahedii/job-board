<?php

namespace App\Models;

use App\Models\SalaryType;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\v1\careepick\JobCategory;
use App\Models\v1\careepick\Recruiter\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    /**
     * Get the jobs associated with the category.
     */
    public function jobSkills()
    {
        return $this->hasMany(JobRequiredSkills::class, 'job_id');
    }

    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }

    public function salaryType()
    {
        return $this->belongsTo(SalaryType::class, 'salary_type_id');
    }

    public function experienceRange()
    {
        return $this->belongsTo(ExperienceRange::class, 'experience_id');
    }

    public function ageRange()
    {
        return $this->belongsTo(AgeRange::class, 'age_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function jobNature()
    {
        return $this->belongsTo(JobNature::class, 'job_nature');
    }

    public function jobPlace()
    {
        return $this->belongsTo(JobPlace::class, 'job_place');
    }

    public static function getJobsByCategory($id)
    {
        $processedData = [];

        self::with(['salaryType', 'experienceRange', 'ageRange', 'company', 'jobNature', 'jobSkills.skill'])
            ->where('job_category_id', $id)
            ->chunk(100, function ($jobs) use (&$processedData) {
                foreach ($jobs as $job) {
                    // $jobSkills = $job->jobSkills->map(function ($jobSkill) {
                    //     return $jobSkill->skill->skill_name;
                    // });
                    $jobSkills = $job->jobSkills->take(5)->map(function ($jobSkill) {
                        return $jobSkill->skill->skill_name;
                    });

                    $processedData[] = [
                        'id' => $job->id,
                        'job_category_id' => $job->job_category_id,
                        'job_title' => $job->job_title,
                        'deadline' => $job->deadline,
                        'job_location' => $job->job_location,
                        'responsibilities' => $job->responsibilities,
                        'salary' => $job->salary,
                        'slug' => $job->slug,
                        'salary_type_name' => optional($job->salaryType)->type,
                        'experience_range_name' => optional($job->experienceRange)->experience,
                        'age_range_name' => optional($job->ageRange)->age,
                        'company_name' => optional($job->company)->company_name,
                        'job_nature_name' => optional($job->jobNature)->nature,
                        'job_skills' => $jobSkills,
                    ];
                }
            });

        return $processedData;
    }

    public static function getJobsByCompany($id)
    {
        $processedData = [];

        self::with(['salaryType', 'experienceRange', 'ageRange', 'company', 'jobNature', 'jobSkills.skill'])
            ->where('company_id', $id)
            ->chunk(100, function ($jobs) use (&$processedData) {
                foreach ($jobs as $job) {
                    $jobSkills = $job->jobSkills->take(5)->map(function ($jobSkill) {
                        return $jobSkill->skill->skill_name;
                    });

                    $processedData[] = (object) [
                        'id' => $job->id,
                        'job_category_id' => $job->job_category_id,
                        'job_title' => $job->job_title,
                        'deadline' => $job->deadline,
                        'job_location' => $job->job_location,
                        'responsibilities' => $job->responsibilities,
                        'salary' => $job->salary,
                        'slug' => $job->slug,
                        'salary_type_name' => optional($job->salaryType)->type,
                        'experience_range_name' => optional($job->experienceRange)->experience,
                        'age_range_name' => optional($job->ageRange)->age,
                        'company_name' => optional($job->company)->company_name,
                        'job_nature_name' => optional($job->jobNature)->nature,
                        'job_skills' => $jobSkills,
                    ];
                }
            });

            return new Collection($processedData);
    }

    public static function getJobDetail($slug)
    {
        $processedData = [];

        self::with(['salaryType', 'experienceRange', 'ageRange', 'company', 'jobNature', 'jobPlace', 'jobSkills.skill'])
            ->where('slug', $slug)
            ->chunk(100, function ($jobs) use (&$processedData) {
                foreach ($jobs as $job) {
                    $jobSkills = $job->jobSkills->map(function ($jobSkill) {
                        return $jobSkill->skill->skill_name;
                    });

                    $processedData[] = (object) [
                        'id' => $job->id,
                        'job_category_id' => $job->job_category_id,
                        'job_title' => $job->job_title,
                        'vacancy' => $job->vacancy,
                        'deadline' => $job->deadline,
                        'job_location' => $job->job_location,
                        'responsibilities' => $job->responsibilities,
                        'salary' => $job->salary,
                        'slug' => $job->slug,
                        'education' => $job->education,
                        'experience_requirments' => $job->experience_requirments,
                        'additional_requirments' => $job->additional_requirments,
                        'responsibilities' => $job->responsibilities,
                        'compensation_benefits' => $job->compensation_benefits,
                        'job_highlights' => $job->job_highlights,
                        'salary_type_name' => optional($job->salaryType)->type,
                        'experience_range_name' => optional($job->experienceRange)->experience,
                        'age_range_name' => optional($job->ageRange)->age,
                        'company_name' => optional($job->company)->company_name,
                        'job_nature_name' => optional($job->jobNature)->nature,
                        'work_place' => optional($job->jobPlace)->workplace,
                        'job_skills' => $jobSkills,
                    ];
                }
            });

            return new Collection($processedData);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequiredSkills extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'job_id',
        'skill_id',
    ];

    /**
     * Add skills for a job seeker.
     *
     * @param array $data
     * @return void
     */
    public static function addSkills($jobId, $skillSets)
    {
        // Loop through each skill_id and save it for the job seeker
        foreach ($skillSets as $skill) {
            self::create([
                'job_id' => $jobId,
                'skill_id' => $skill,
            ]);
        }
    }
}

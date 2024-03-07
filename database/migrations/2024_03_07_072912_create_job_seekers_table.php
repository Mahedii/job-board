<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->string('jobseeker_name');
            $table->string('jobseeker_mail');
            $table->string('jobseeker_password');
            $table->string('jobseeker_gender');
            $table->text('jobseeker_address');
            $table->string('jobseeker_image');
            $table->string('jobseeker_custom_resume');
            $table->text('jobseeker_summary')->nullable();
            $table->string('jobseeker_website_url')->nullable();
            $table->string('jobseeker_linkedin_url')->nullable();
            $table->string('jobseeker_facebook_url')->nullable();
            $table->string('jobseeker_phone_no_1');
            $table->string('jobseeker_phone_no_2')->nullable();
            $table->integer('jobseeker_status')->default(0);
            $table->string('slug')->unique();
            $table->tinyText('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_seekers');
    }
};

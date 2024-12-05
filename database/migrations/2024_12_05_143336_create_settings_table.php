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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('position_title')->nullable();

            $table->string('About_section_heading')->nullable();
            $table->text('About_section_description')->nullable();
            $table->string('About_section_row')->nullable();

            $table->string('education_title')->nullable();
            $table->string('education_institude')->nullable();
            $table->string('education_year_start_date')->nullable();
            $table->string('education_year_end_date')->nullable();

            $table->string('experience_title')->nullable();
            $table->string('experience_company_name')->nullable();
            $table->text('experience_description')->nullable();
            $table->string('experience__start_date')->nullable();
            $table->string('experience__end_date')->nullable();

            $table->string('Skill_title')->nullable();

            $table->string('service_title')->nullable();
            $table->string('service_description')->nullable();

            $table->string('portfolio_image')->nullable();
            $table->string('portfolio_link')->nullable();

            $table->string('social_logo')->nullable();
            $table->string('social_link')->nullable();

            $table->string('site_logo')->nullable();
            $table->string('site_name')->nullable();
            $table->string('site_link')->nullable();

            $table->string('hire_link')->nullable();


           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

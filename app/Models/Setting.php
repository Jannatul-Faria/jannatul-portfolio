<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable=[
        'name',
        'position_title',

        'About_section_heading',
        'About_section_description',
        'About_section_row',

        'education_title',
        'education_institude',
        'education_year_start_date',
        'education_year_end_date',

        'experience_title',
        'experience_company_name',
        'experience_description',
        'experience__start_date',
        'experience__end_date',

        'Skill_title',

        'service_title',
        'service_description',

        'portfolio_image',
        'portfolio_link',

        'social_logo',
        'social_link',
        
        'site_logo',
        'site_name',
        'site_link',

        'hire_link',
       

    ];
}

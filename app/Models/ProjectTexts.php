<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTexts extends Model
{
    protected $table = 'project_texts';

    protected $fillable = [
        'hero_tag',
        'hero_title',
        'hero_description',
        'show_cta',
    ];
}

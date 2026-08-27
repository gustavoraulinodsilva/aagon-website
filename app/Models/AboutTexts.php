<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTexts extends Model
{
    protected $table = 'about_texts';

    protected $fillable = [
        'hero_tag',
        'hero_title',
        'hero_description',
        'hero_image',
        'hero_figcaption',
        'philosophy_tag',
        'philosophy_title',
        'philosophy_description',
        'manifest_tag',
        'manifest_text',
        'approach_tag',
        'approach_title',
        'workflow_tag',
        'workflow_title',
        'values_tag',
        'values_title',
        'metrics_tag',
        'metrics_title',
        'show_philosophy',
        'show_approach',
        'show_workflow',
        'show_values',
        'show_metrics'
    ];
}

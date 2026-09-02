<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamTexts extends Model
{
    protected $table = 'team_texts';

    protected $fillable = [
        'hero_tag',
        'hero_title',
        'hero_description',
        'essence_tag',
        'essence_title',
        'essence_description',
        'team_tag',
        'team_title',
        'philosophy_tag',
        'philosophy_text',
        'show_essence',
        'show_team',
        'show_philosophy',
        'show_cta'
    ];
}

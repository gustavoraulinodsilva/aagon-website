<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeTexts extends Model
{
    protected $table = 'home_texts';

    protected $fillable = [
        'hero_background',
        'hero_eyebrow',
        'hero_title',
        'hero_description',
        'hero_primary_label',
        'hero_primary_link',
        'hero_secondary_label',
        'hero_secondary_link',
        'philosophy_text',
        'methodology_label',
        'methodology_title',
        'methodology_description',
        'services_label',
        'services_title',
        'services_link_label',
        'services_link_url',
        'about_label',
        'about_title',
        'about_description',
        'show_philosophy',
        'show_methodology',
        'show_services',
        'show_about',
        'show_cta'
    ];
}

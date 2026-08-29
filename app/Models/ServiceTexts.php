<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceTexts extends Model
{
    protected $table = 'service_texts';

    protected $fillable = [
        'hero_tag',
        'hero_title',
        'hero_description',
        'philosophy_tag',
        'philosophy_title',
        'philosophy_description',
        'catalog_tag',
        'catalog_title',
        'lifecycle_tag',
        'lifecycle_title',
        'show_philosophy',
        'show_catalog',
        'show_lifecycle',
        'show_cta',
    ];
}

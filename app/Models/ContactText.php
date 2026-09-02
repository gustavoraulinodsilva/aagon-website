<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactText extends Model
{
    protected $table = 'contact_texts';    

    protected $fillable = [
        'hero_tag',
        'hero_title',
        'hero_description',
        'service_tag',
        'service_title',
        'service_description',
        'business_hours',
        'availability',
    ];
}

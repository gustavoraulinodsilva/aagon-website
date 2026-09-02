<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table = 'generals';

    protected $fillable = [
        'email',
        'location',
        'linkedin',
        'instagram',
        'facebook',
        'twitter',
        'slogan',
        'privacy_policy_link',
        'terms_of_service_link',
        'cookie_policy_link',
        'cta_tag',
        'cta_title',
        'cta_description',
        'cta_btn_label',
        'cta_btn_link'
    ];
}

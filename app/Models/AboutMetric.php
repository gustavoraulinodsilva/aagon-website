<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMetric extends Model
{
    protected $table = 'about_metrics';

    protected $fillable = [
        'value',
        'suffix',
        'label',
        'order',
        'is_active',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutApproach extends Model
{
    protected $table = 'about_approaches';

    protected $fillable = [
        'number',
        'title',
        'description',
        'order',
        'is_active',
    ];

    public function getNumberAttribute($value): string
    {
        return str_pad($value, 2, '0', STR_PAD_LEFT);
    }
}

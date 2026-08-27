<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeMethodologyStep extends Model
{
    protected $table = 'home_methodology_steps';    

    protected $fillable = [
        'number',
        'title',
        'description',
        'is_active',
        'order',
    ];

    public function getNumberAttribute($value): string
    {
        return str_pad($value, 2, '0', STR_PAD_LEFT);
    }
}

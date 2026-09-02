<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable = [
        'name',
        'role',
        'bio',
        'linkedin',
        'image',
        'number',
        'order'
    ];

    public function getNumberAttribute( mixed $value): string
    {
        return str_pad($value, 2, '0', STR_PAD_LEFT);
    }
}

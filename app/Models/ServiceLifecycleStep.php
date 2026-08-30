<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceLifecycleStep extends Model
{
    protected $table = 'service_lifecycle_steps';

    protected $fillable = [
        'number',
        'title',
        'description',
        'order',
        'is_active',
    ];

    public function getNumberAttribute(mixed $value): string
    {
        return str_pad((string) $value, 2, '0', STR_PAD_LEFT);
    }
}

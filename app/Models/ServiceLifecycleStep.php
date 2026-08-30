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
}

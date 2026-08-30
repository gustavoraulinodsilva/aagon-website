<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceMethodologyStep extends Model
{
    protected $table = 'service_methodology_steps';

    protected $fillable = [
        'service_id',
        'number',
        'title',
        'description',
        'order'
    ];

    public function getNumberAttribute(mixed $value): string
    {
        return str_pad((string) $value, 2, '0', STR_PAD_LEFT);
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}

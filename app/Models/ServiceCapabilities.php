<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCapabilities extends Model
{
    protected $table = 'service_capabilities';

    protected $fillable = [
        'service_id',
        'number',
        'title',
        'description',
        'tech_tags',
        'order'
    ];

    protected $casts = [
        'tech_tags' => 'array'
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

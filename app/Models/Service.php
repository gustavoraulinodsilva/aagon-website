<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'number',
        'title',
        'slug',
        'description',
        'challenge_tag',
        'challenge_title',
        'challenge_description',
        'deliverable_tag',
        'deliverable_title',
        'deliverables',
        'methodology_tag',
        'methodology_title',
        'tech_tag',
        'tech_stack',
        'project_title',
        'capability_title',
        'order',
        'is_active',
        'show_challenge',
        'show_deliverables',
        'show_methodology',
        'show_tech_stack'
    ];

    protected $casts = [
        'deliverables' => 'array',
        'tech_stack' => 'array'
    ];

    public function getNumberAttribute(mixed $value): string
    {
        return str_pad((string) $value, 2, '0', STR_PAD_LEFT);
    }

    public function capabilities()
    {
        return $this->hasMany(ServiceCapabilities::class, 'service_id', 'id')->orderBy('order');
    }

    public function methodologySteps()
    {
        return $this->hasMany(ServiceMethodologyStep::class, 'service_id', 'id')->orderBy('order');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'project_category_id',
        'service_id',
        'is_featured',
        'name',
        'slug',
        'description',
        'client',
        'image',
        'caption',
        'challenge_tag',
        'challenge_title',
        'challenge_description',
        'solution_tag',
        'solution_title',
        'solution_description',
        'impact_tag',
        'impact_title',
        'impact_description',
        'tech_tag',
        'tech_stack',
        'gallery_tag',
        'gallery_title',
        'order',
        'show_challenge',
        'show_solution',
        'show_impact',
        'show_gallery',
        'show_cta'
    ];

    protected $casts = [
        'tech_stack' => 'array'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id', 'id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function metrics()
    {
        return $this->hasMany(ProjectMetric::class, 'project_id', 'id')->orderBy('order');
    }

    public function galleries()
    {
        return $this->hasMany(ProjectGallery::class, 'project_id', 'id')->orderBy('order');
    }
}

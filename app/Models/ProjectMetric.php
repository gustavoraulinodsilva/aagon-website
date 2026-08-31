<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectMetric extends Model
{
    protected $table = 'project_metrics';

    protected $fillable = [
        'name',
        'value',
        'project_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}

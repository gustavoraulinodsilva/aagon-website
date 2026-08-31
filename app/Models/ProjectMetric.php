<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectMetric extends Model
{
    protected $table = 'project_metrics';

    protected $fillable = [
        'project_id',
        'prefix',
        'value',
        'suffix',
        'label',
        'order,'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}

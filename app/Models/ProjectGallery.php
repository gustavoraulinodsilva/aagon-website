<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    protected $table = 'project_galleries';

    protected $fillable = [
        'project_id',
        'image',
        'caption',
        'order'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}

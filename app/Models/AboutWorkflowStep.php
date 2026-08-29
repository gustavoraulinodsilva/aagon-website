<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutWorkflowStep extends Model
{
    protected $table = 'about_workflow_steps';

    protected $fillable = [
        'step',
        'title',
        'description',
        'order',
        'is_active',
    ];
}

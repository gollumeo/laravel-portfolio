<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Projects
{
    protected $table = 'portfolio_projects';
    protected array $fillable = [
        'project_name',
        'project_description',
        'project_image',
    ];

    public function Languages()
    {
        return $this->belongsToMany(Languages::class, 'language_project', 'project_id', 'language_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    use HasFactory;
    protected $table = 'languages_project';
    protected $fillable = [
        'language_name',
    ];

    public function Projects()
    {
        return $this->belongsToMany(Projects::class);
    }

}


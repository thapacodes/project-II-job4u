<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'type',
        'logo',
        'fully_remote',
        'work_region',
        'url',
        'description',
        'salary',
        'experience_level',
        'education',
        'uploaded_by',
        'status'
    ];
}

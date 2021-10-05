<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningPortal extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'title',
        'slug',
        'category',
        'url',
        'status',
    ];
}

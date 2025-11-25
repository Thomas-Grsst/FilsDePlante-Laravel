<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{

    protected $fillable = [
        'title',
        'theme',
        'image',
        'description',
        'duration',
        'sections',
        'tips'
    ];

    protected $casts = [
        'sections' => 'array',
        'tips' => 'array'
    ];
}
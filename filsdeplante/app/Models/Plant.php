<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'image',
        'description',
        'seasons'
    ];


    protected $casts = [
        'seasons' => 'array' // Cast automatique JSON ↔ Array
    ];
    /**
     * Relation one-to-one avec PlantCare
     */
    public function care(): HasOne
    {
        return $this->hasOne(PlantCare::class);
    }
}
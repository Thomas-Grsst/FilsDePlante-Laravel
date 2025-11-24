<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlantCare extends Model
{
    use HasFactory;

    protected $table = 'plant_care'; // Spécifier le nom de la table

    protected $fillable = [
        'plant_id',
        'plantation',
        'recolte',
        'exposition',
        'arrosage',
        'entretien',
        'conseil'
    ];

    /**
     * Relation belongs-to avec Plant
     */
    public function plant(): BelongsTo
    {
        return $this->belongsTo(Plant::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalHasBiome extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'animal_id',
        'biome_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biome extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'temperature',
        'latitude',
        'altitude',
        'created_by',
        'updated_by',
        'deleted_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SCParticipante extends Model
{
    use HasFactory;
    protected $fillable = [
        'place',
        'name_place',
        'level_place',
        'name_docente',
        'mount_girls',
        'mount_boys',
        'range_years'
    ];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname_p',
        'lastname_m',
        'email_institucional',
        'email_personal',
        'number',
        'instituto',
        'name_academico',
        'grade_academico',
        'area'
    ];
}


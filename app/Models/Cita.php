<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'mascota',
        'tipo',
        'fecha',
        'dueno',
        'telefono'
    ];
}

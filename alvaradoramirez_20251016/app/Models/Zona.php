<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
     use HasFactory;

    protected $table = 'zona'; 

    protected $fillable = [
        'nombre_zona',
        'id_pais'
    ];
}

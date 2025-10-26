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

    public function pais()
{
    return $this->belongsTo(Pais::class, 'id_pais', 'id_pais');
}
}

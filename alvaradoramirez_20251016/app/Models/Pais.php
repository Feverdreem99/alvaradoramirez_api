<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pais extends Model
{
    protected $table = 'pais';
    protected $primaryKey = 'id_pais';
    public $timestamps = false;

    protected $fillable = [
        'nombre_pais'
    ];

    public function zonas()
    {
        return $this->hasMany(Zona::class, 'id_pais', 'id_pais');
    }
}

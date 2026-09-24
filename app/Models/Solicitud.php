<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';

    protected $fillable = [
        'nombre', 'empresa', 'email', 'telefono', 'tipo_proyecto', 'tiempo_estimado',
        'descripcion', 'tecnologias', 'como_nos_encontro', 'medio_contacto', 'comentarios',
        'privacy_version', 'consented_at',
    ];

    protected function casts(): array
    {
        return ['tecnologias' => 'array', 'consented_at' => 'datetime'];
    }
}

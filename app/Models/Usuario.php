<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table="usuarios";
    protected $primaryKey="id";
    protected $filliable=[ 

        "rol_id",
        "nombres",
        "apellidos",
        "tipo_identificacion",
        "numero_identificacion",
        "telefono",
        "email",
        "profesion"
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}

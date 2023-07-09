<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    
    protected $table = 'roles';
    protected $primaryKey = 'id'; // Especifica la clave primaria
    protected $fillable = [

        'nombre_rol',
      ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'rol_id');
    }
}

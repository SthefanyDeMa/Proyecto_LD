<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla si no sigue la convención de Laravel
    protected $table = 'sucursales';  // Cambia 'sucursal' al nombre exacto de la tabla

    protected $fillable = ['nombre', 'direccion', 'empresa_id'];
    public function __toString()
    {
        return $this->nombre;
    }
    // Relación N:1 con Empresa (inversa)
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    // Relación 1:N con Users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

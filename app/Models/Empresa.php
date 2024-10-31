<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada (opcional si sigue la convención Laravel)
    protected $table = 'empresas';

    // Campos que se pueden asignar masivamente
    protected $fillable = ['nombre', 'ruc', 'direccion', 'logo', 'plan_id'];

    // Método mágico para obtener el nombre de la empresa como cadena
    public function __toString()
    {
        return $this->nombre;
    }

    // Relación 1:N con Sucursal
    public function sucursales()
    {
        return $this->hasMany(Sucursal::class);
    }

    // Relación N:1 con Plan
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}

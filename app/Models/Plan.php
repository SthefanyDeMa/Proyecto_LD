<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada (opcional si sigue la convención Laravel)
    protected $table = 'planes';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre', 'costo', 'limite_sucursales', 'limite_habitaciones',
        'facturacion_sunat', 'gestor_usuarios', 'vigencia'
    ];

    // Relación 1:N con Empresa
    public function empresas()
    {
        return $this->hasMany(Empresa::class);
    }
}

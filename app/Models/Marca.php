<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public function tiposVehiculo()
    {
        return $this->belongsToMany(TipoVehiculo::class, 'marca_tipo_vehiculo', 'marca_id', 'tipo_vehiculo_id')->withTimestamps();
    }
}

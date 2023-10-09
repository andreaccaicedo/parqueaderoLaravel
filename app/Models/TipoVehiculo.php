<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;

    protected $primaryKey='idTipoVehiculo';
    public function marcas()
    {
        return $this->belongsToMany(Marca::class, 'marca_tipo_vehiculo', 'tipo_vehiculo_id', 'marca_id')->withTimestamps();
    }
}

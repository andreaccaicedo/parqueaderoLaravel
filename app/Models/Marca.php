<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public function tipo_vehiculos()
    {
        return $this->belongsToMany(TipoVehiculo::class)->withTimestamps();
    }
}

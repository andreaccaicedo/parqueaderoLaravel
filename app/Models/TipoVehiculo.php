<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;

    public function marcas()
    {
        return $this->belongsToMany(Marca::class)->withTimestamps();
    }
}

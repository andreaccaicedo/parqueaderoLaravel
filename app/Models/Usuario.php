<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsiario::class);
        
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $primaryKey='idUsuario';

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class);
        
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}

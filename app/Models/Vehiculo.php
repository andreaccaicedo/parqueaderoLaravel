<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
        
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
        
    }
}

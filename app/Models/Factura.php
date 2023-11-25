<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $primaryKey='id';

    public function vehiculo()
    {
        //return $this->HasOne(Vehiculo::class);
        return $this->belongsTo(Vehiculo::class, 'vehiculo_id');
    }

    
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilios';
    protected $fillable = ['calle','numero','barrio','location_id'];

    public function location(){
        return $this->belongsTo('\App\Location');
      }
      public function empleado(){
        return $this->belongsTo('\App\Empleado');
      }
      public function proveedor(){
        return $this->belongsTo('\App\Proveedor');
      }
      public function cliente(){
        return $this->belongsTo('\App\Cliente');
      }
}

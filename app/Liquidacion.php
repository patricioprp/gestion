<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liquidacion extends Model
{
    protected $table = 'liquidacion';
    protected $fillable = ['sueldo_neto','fecha_desde','fecha_hasta','periodo','estado','empleado_id'];
  
    public function detallesliquidacions(){
        //relacion uno a muchos
        return $this->hasMany('\App\DetalleLiquidacion');
      }

    public function empleado(){
        return $this->belongsTo('\App\Empleado');
      }

}

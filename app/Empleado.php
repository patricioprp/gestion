<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['turno','nombre','apellido','dni','telefono','email','password','empleado_id'];
    
    public function liquidacion(){
        return $this->belongsTo('\App\Liquidacion');
      }
    public function domicilio(){
        return $this->belongsTo('\App\Domicilio');
      }
      public function ventas(){
        //relacion uno a muchos
        return $this->hasMany('\App\Venta');
      }
      public function compras(){
        //relacion uno a muchos
        return $this->hasMany('\App\Compra');
      }
}

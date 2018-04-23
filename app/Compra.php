<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';
    protected $fillable = ['monto_compra','fecha_compra','proveedor_id','empleado_id'];

    public function lineaCompras(){
        //relacion uno a muchos
        return $this->hasMany('\App\LineaCompra');
      }

    public function empleado(){
        return $this->belongsTo('\App\Empleado');
      }

    public function proveedor(){
        return $this->belongsTo('\App\Proveedor');
      }
}

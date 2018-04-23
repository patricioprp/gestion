<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    protected $table = 'conceptos';
    protected $fillable = ['tipo','descripcion','montoFijo','montoVariable'];

    public function detallesliquidacions(){
        //relacion uno a muchos
        return $this->hasMany('\App\DetalleLiquidacion');
      }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleLiquidacion extends Model
{
    protected $table = 'detalles_liquidacions';
    protected $fillable = ['monto','descuento','subtotal','liquidacion_id','concepto_id'];

    public function concepto(){
        return $this->belongsTo('\App\Concepto');
      }

      public function liquidacion(){
        return $this->belongsTo('\App\Liquidacion');
      }
}

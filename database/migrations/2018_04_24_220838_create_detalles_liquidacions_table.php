<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesLiquidacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_liquidacions', function (Blueprint $table) {
            $table->increments('id');
            $table->double('monto',8,2);
            $table->double('descuento',8,2);
            $table->double('subtotal',8,2);

            $table->integer('liquidacion_id')->unsigned();
            $table->foreign('liquidacion_id')->references('id')->on('liquidacions');

            $table->integer('concepto_id')->unsigned();
            $table->foreign('concepto_id')->references('id')->on('conceptos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_liquidacions');
    }
}

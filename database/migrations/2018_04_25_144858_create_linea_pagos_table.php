<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_pagos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cuentaCorriente_id')->unsigned();
            $table->foreign('cuentaCorriente_id')->references('id')->on('cuentaCorrientes');
            $table->integer('pago_CC_id')->unsigned();
            $table->foreign('pago_CC_id')->references('id')->on('pagoCuentaCorrientes');
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
        Schema::dropIfExists('linea_pagos');
    }
}

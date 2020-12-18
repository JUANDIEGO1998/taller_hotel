<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('CodigoF');
            $table->unsignedBigInteger('Numero'); 
            $table->foreign('Numero')->references('Numero')->on('habitacion');
            $table->unsignedBigInteger('Cliente'); 
            $table->foreign('Cliente')->references('id')->on('cliente');
            $table->unsignedBigInteger('FormaPago');
            $table->foreign('FormaPago')->references('id')->on('formaPago');      
            $table->dateTime('Entrada', $precision = 0);
            $table->dateTime('Salida', $precision = 0);
            $table->double('Total');
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
        Schema::dropIfExists('factura');
    }
}

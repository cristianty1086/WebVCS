<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContadorobjparamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contadorobjparams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('camaraip_id');
            //$table->foreign('camaraip_id')->references('id')->on('camarasip');  
            $table->string('contenido'); 
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
        Schema::dropIfExists('contadorobjparams');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodobaseparamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodobaseparams', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->integer('camaraip_id');
            //$table->foreign('camaraip_id')->references('id')->on('camarasip');
            $table->char('contenido');
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
        Schema::dropIfExists('metodobaseparams');
    }
}

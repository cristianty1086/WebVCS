<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacasdetectadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placasdetectadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nombreimagen');
            $table->char('ocr'); 
            $table->integer('camaraip_id');
            //$table->foreign('camaraip_id')->references('id')->on('camarasip');
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
        Schema::dropIfExists('placasdetectadas');
    }
}

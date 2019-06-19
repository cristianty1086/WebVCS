<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCercovirtualparamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cercovirtualparams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('camaraip_id');
            $table->foreign('camaraip_id')->references('id')->on('camarasip');  
            $table->string('contenido'); 
            $table->integer('width');
            $table->integer('height'); 
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
        Schema::dropIfExists('cercovirtualparams');
    }
}

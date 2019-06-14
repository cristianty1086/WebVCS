<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamarasipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camarasip', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->integer('user_id');
            //$table->foreign('user_id')->references('id')->on('users');  
            $table->char('username');
            $table->char('passwd');
            $table->char('modelo');
            $table->char('url'); 
            $table->integer('ubicacion_id');
            //$table->foreign('ubicacion_id')->references('id')->on('ubicaciones'); 
            $table->integer('estado'); 
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
        Schema::dropIfExists('camarasip');
    }
}

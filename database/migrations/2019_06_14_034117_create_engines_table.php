<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('camaraip_id');
            $table->foreign('camaraip_id')->references('id')->on('camarasip');  
            $table->unsignedBigInteger('metodoanalisi_id');
            $table->foreign('metodoanalisi_id')->references('id')->on('metodoanalisis');  
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
        Schema::dropIfExists('engines');
    }
}

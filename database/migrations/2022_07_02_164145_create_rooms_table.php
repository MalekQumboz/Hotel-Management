<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            // DL=> double luxury ,DN=> double normal ,  SL=> single luxury ,SN=> single normal , 
            $table->enum('type',['DL','DN','SL','SN'])->default('SL');
            //R => Reserve , N => Not-Reserve
            $table->enum('status',['R','N'])->default('N');
            $table->float('price');
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
        Schema::dropIfExists('rooms');
    }
};

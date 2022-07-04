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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('id_number');
            $table->date('date'); //birthday
            $table->string('address');
            $table->enum('gender',['M','F'])->default('M');
            $table->integer('phone');
            $table->integer('salary');
            $table->integer('work_hours');
            $table->date('hiring'); //date hiring
            $table->foreignId('department_id')->constrained('departments','id');
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
        Schema::dropIfExists('employees');
    }
};

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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->date('date_from'); //from
            $table->time('time_from');//from
            $table->date('date_to'); //to
            $table->time('time_to');//to
            $table->enum('pay',['C','CH','CC'])->default('C'); //c=> cash , CH => check ,CC => Card
            $table->string('bar_code'); //for discount
            $table->foreignId('customer_id')->constrained('customers','id');
            
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
        Schema::dropIfExists('bookings');
    }
};

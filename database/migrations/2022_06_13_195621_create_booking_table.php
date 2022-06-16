<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table->integer('userid')->nullable();
            $table->string('email');
            $table->string('current');
            $table->string('destination');
            $table->date('leaving');
            $table->date('returning')->nullable();
            $table->integer('noofadult');
            $table->integer('noofchildren');
            $table->double('adultcost')->nullable();
            $table->double('childrencost')->nullable();
            $table->string('typeofclass');
            $table->string('typeoftrip');
            $table->double('cost');
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
        Schema::dropIfExists('booking');
    }
}

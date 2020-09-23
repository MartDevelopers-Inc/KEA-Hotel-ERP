<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('room_id');
            $table->string('room_number');
            $table->string('room_cost');
            $table->string('room_type');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('cust_name');
            $table->string('cust_id');
            $table->string('cust_phone');
            $table->string('cust_email');
            $table->string('cust_adr');
            $table->string('status');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanquetHallsReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banquet_halls_reservations', function (Blueprint $table) {
            $table->id();

            $table->integer('hallId');
            $table->date('reservationDate');
            $table->string('package');
            $table->string('customerName');
            $table->string('customerEmail');
            $table->string('customerMobile');
            $table->string('status');// -> default('PENDING');// PENDING, ONGOING, COMPLETED, CANCELLED

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
        Schema::dropIfExists('banquet_halls_reservations');
    }
}

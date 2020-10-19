<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past__orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderCode');
            $table->string('orderType');
            $table->string('orderStatus') -> default('COMPLETED');
            $table->float('price');
            $table->string('customerName');
            $table->string('customerEmail');
            $table->string('customerMobile');
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
        Schema::dropIfExists('past__orders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table ->string('firstName');
            $table->string('surname');
            $table->string('NIC');
            $table->string('gender');
            $table->string('country');
            $table->string('mStatus');
            $table->string('jobRole');
            $table->string('userName');
            $table->string('password');
            $table->string('bankName');
            $table->integer('accountNumber');
            $table->integer('mobile');
            $table->string('address');
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
        Schema::dropIfExists('user_details');
    }
}

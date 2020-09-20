<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inserts', function (Blueprint $table) {
            $table->id('id');
            $table->string('tableNum');
            $table->string('CusName');
            $table->string('NumofGuest');
            $table->date('date');
            $table->time('time');
            $table->string('Phone');
            $table->string('occation');
            $table->string('AssignWaiter');
            $table->string('Request');
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
        Schema::dropIfExists('inserts');
    }
}

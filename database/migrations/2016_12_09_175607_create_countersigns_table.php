<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountersignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countersigns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('signed_at');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->unique(['email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countersigns');
    }
}

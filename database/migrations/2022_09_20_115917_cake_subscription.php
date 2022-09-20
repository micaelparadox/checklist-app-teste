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
        Schema::create('cake_subscription', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->integer('cake_id')->unsigned();
            $table->timestamps();

            $table->foreign('cake_id')->references('id')->on('cakes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

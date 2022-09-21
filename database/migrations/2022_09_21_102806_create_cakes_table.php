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
        Schema::create('cakes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('weight');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::create('cake_subs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cake_id');
            $table->string('email');
            $table->timestamps();
            $table->foreign('cake_id')
                ->references('id')
                ->on('cakes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cakes');
    }
};

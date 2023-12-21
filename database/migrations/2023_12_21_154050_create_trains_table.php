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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 255);
            $table->string('departure_station', 255);
            $table->date('date');
            $table->string('arrival_station', 255);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->tinyInteger('stops', 1, 5);
            $table->string('train_code', 255)->unique();
            $table->tinyInteger('number_carriages', 1, 10);
            $table->boolean('in_time')->default(true);
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('trains');
    }
};

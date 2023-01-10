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
            $table->string('company', 120);
            $table->string('departure_station', 120);
            $table->string('arrival_station', 120);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('trains_code', 15);
            $table->tinyInteger('number_coaches')->unsigned();
            $table->boolean('is_ontime')->default(1);
            $table->boolean('is_available')->default(1);
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

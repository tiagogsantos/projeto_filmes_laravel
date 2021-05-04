<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id');

            $table->string('season');
            $table->string('number_epsode');
            $table->string('name_epsode');
            $table->string('duracion_epsode');
            $table->date('lancament_season');
            $table->text('description_epsode');
            $table->string('url_link');
            $table->unsignedInteger('series');

            /** Relacionando tabela de series */

            $table->foreign('series')->references('id')->on('series')->onDelete('CASCADE');

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
        Schema::dropIfExists('series_season');
    }
}

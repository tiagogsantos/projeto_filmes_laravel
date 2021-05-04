<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('films_category');
            $table->string('quality_image');
            $table->text('sinopse');
            $table->string('language');
            $table->string('duraction');
            $table->date('lancament')->nullable();
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
        Schema::table('films', function (Blueprint $table) {

            /** perfil */
            $table->dropColumn('title');

            /** data */
            $table->dropColumn('films_category');
            $table->dropColumn('quality_image');
            $table->dropColumn('sinopse');
            $table->dropColumn('language');
            $table->dropColumn('duraction');
            $table->dropColumn('lancament');
        });
    }
}

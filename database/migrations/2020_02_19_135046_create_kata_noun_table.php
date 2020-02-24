<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKataNounTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kata_noun', function (Blueprint $table) {
            $table->bigIncrements('id_kata_n');
            $table->bigInteger('id_hipernim_n')->unsigned();
            $table->string('kata_dasar_n');
            $table->string('makna_dasar_n');
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
        Schema::dropIfExists('kata_noun');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHipernimNounTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hipernim_noun', function (Blueprint $table) {
            $table->bigIncrements('id_hipernim_n');
            $table->integer('id_jarak_n')->unsigned();
            $table->string('hipernim_n');
            $table->string('makna_hipernim_n');
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
        Schema::dropIfExists('hipernim_noun');
    }
}

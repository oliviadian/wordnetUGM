<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHipernimVerbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hipernim_verbs', function (Blueprint $table) {
            $table->bigIncrements('id_hipernim_v');
            $table->unsignedBigInteger('id_kata_v');
            $table->string('hipernim_v');
            $table->string('makna_hipernim_v');
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
        Schema::dropIfExists('hipernim_verb');
    }
}

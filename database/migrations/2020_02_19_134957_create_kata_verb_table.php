<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKataVerbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kata_verbs', function (Blueprint $table) {
            $table->bigIncrements('id_kata_v');
            $table->integer('id')->unsigned();
            $table->string('kata_dasar_v');
            $table->string('makna_dasar_v');
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
        Schema::dropIfExists('kata_verb');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJarakNounsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jarak_nouns', function (Blueprint $table) {
            $table->bigIncrements('id_jarak_n');
            $table->integer('id_tambah_kata_n')->unsigned();
            $table->string('id_hipernim_satu');
            $table->string('id_hipernim_dua');
            $table->string('jarak');
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
        Schema::dropIfExists('jarak_noun');
    }
}

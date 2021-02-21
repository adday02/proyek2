<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanyas', function (Blueprint $table) {
            $table->Increments('id_tanya');
            $table->string('nip');
            $table->foreign('nip')->references('nip')->on('pegawais');
            $table->string('nik');
            $table->foreign('nik')->references('nik')->on('masyarakats');
            $table->string('pertanyaan');
            $table->string('jawaban');
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
        Schema::dropIfExists('tanyas');
    }
}

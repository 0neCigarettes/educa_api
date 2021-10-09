<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id_jawaban');
            $table->bigInteger('id_users')->nullable(false);
            $table->bigInteger('id_ujian')->nullable(false);
            $table->bigInteger('id_soal')->nullable(false);
            $table->string('pilihan');
            $table->string('bobot');
            $table->string('bukti');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_jawaban');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalUjianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_ujian', function (Blueprint $table) {
            $table->bigIncrements('id_soal');
            $table->bigInteger('id_ujian');
            $table->string('kode_soal');
            $table->text('judul_soal');
            $table->text('soal');
            $table->text('pilihan_a');
            $table->string('pilihan_gambar_a');
            $table->text('pilihan_b');
            $table->string('pilihan_gambar_b');
            $table->text('pilihan_c');
            $table->string('pilihan_gambar_c');
            $table->text('pilihan_d');
            $table->string('pilihan_gambar_d');
            $table->string('pilihan_benar');
            $table->string('bobot_soal');
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
        Schema::dropIfExists('soal_ujian');
    }
}

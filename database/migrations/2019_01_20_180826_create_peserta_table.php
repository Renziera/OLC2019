<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 255);
            $table->string('nomor_identitas', 32);
            $table->string('nomor_telp', 16);
            $table->string('kode_peserta', 5);
            $table->boolean('kelas_mancing_mania');
            $table->boolean('kelas_ternak_lele');
            $table->boolean('kelas_panen_meme');
            $table->string('bukti_pembayaran', 255)->nullable(true);
            $table->integer('biaya')->unsigned();
            $table->boolean('sudah_bayar');
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
        Schema::dropIfExists('peserta');
    }
}

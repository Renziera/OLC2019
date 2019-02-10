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
            $table->string('kode_peserta', 5)->unique();
            $table->boolean('Web_Apps');
            $table->boolean('Database');
            $table->boolean('Motion_Graphic');
            $table->boolean('Cyber_Security');
            $table->boolean('Graphic_Design');
            $table->boolean('Game_Development');
            $table->boolean('Android_Apps');
            $table->boolean('Web_Design');
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

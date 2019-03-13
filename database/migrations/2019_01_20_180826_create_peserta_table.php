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
            $table->string('instansi', 32);
            $table->string('kontak', 32);
            $table->string('email', 64);
            $table->string('kode_peserta', 5)->unique();

            $table->boolean('web_apps');
            $table->boolean('database');
            $table->boolean('cyber_security');
            $table->boolean('data_science');
            $table->boolean('android_apps_1');
            $table->boolean('android_apps_2');
            $table->boolean('web_design_1');
            $table->boolean('web_design_2');
            
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

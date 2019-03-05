<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 255);
            $table->string('kode_peserta', 5);
            $table->string('kelas', 24);
            $table->boolean('pertemuan1');
            $table->boolean('pertemuan2');
            $table->boolean('pertemuan3');
            $table->boolean('pertemuan4');
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
        Schema::dropIfExists('absensi');
    }
}

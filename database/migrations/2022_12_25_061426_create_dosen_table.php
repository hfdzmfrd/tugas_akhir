<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('NIDN');
            $table->string('Nama');
            $table->string('Umur');
            $table->string('Alamat');
            $table->string('Kota');
            $table->string('Matkul');
            $table->string('Jabatan');
            $table->string('Foto');
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
        Schema::dropIfExists('dosen');
    }
}

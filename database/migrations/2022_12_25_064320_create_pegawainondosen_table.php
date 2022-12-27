<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawainondosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawainondosen', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Umur');
            $table->string('Alamat');
            $table->string('Kota');
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
        Schema::dropIfExists('pegawainondosen');
    }
}

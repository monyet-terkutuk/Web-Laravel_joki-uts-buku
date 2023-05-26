<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->integer('nim_mhs');
            $table->string('nama');
            $table->string('ttl_mhs');
            $table->text('alamat');
            $table->string('telpon_mhs');
            $table->string('email_mhs');
            $table->string('kota_mhs');
            $table->string('agama_mhs');
            $table->unique(array('nim_mhs'));
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('mahasiswa');
    }
};

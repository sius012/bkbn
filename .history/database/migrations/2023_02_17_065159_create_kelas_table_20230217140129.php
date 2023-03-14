<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id("id_kelas");
            $table->string("kelas");
            $table->unsignedBigInteger("id_angkatan");
            $table->unsignedBigInteger("id_jurusan");
            $table->string("tahun_ajaran");

            $table->foreign("id_angkatan")->references("id_angkatan")->on("angkatan");
            $table->foreign("id_jurusan")->references("id_jurusan")->on("jurusan");
        });


        Schema::create('guru_kelas', function (Blueprint $table) {
            $table->id("id_gk");
            $table->string("kelas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}

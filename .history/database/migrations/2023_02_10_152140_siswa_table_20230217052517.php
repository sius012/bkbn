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
        Schema::create("jurusan", function (Blueprint $table) {
            $table->id("id_jurusan");
            $table->string("jurusan");
            $table->string("keterangan");
            $table->timestamps();
        });

        Schema::create("angkatan", function (Blueprint $table) {
            $table->integer("id_angkatan")->primary();
            $table->integer("tahun_mulai");
            $table->integer("bulan_mulai");
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->integer('active')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();


        });

        Schema::create("siswa", function (Blueprint $table) {
            $table->string("nis", 25)->primary();
            $table->unsignedInteger("id_user")->nullable();
            $table->string("nama_siswa", 255);
            $table->unsignedBigInteger("id_jurusan");
            $table->integer("id_angkatan");
            $table->integer("no_absen");
            $table->date("tanggal_lahir", $precision = 0);
            $table->string("tempat_lahir");
            $table->string("alamat");
            $table->string("jenis_kelamin");

            $table->foreign("id_jurusan")->references("id_jurusan")->on("jurusan");
            $table->foreign("id_user")->references("id")->on("users");
            $table->foreign("id_angkatan")->references("id_angkatan")->on("angkatan");
        });

      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

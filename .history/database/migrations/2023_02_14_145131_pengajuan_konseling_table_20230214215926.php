<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PengajuanKonselingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pengajuan_konseling", function(Blueprint $table){
            $table->id("id_pk");
            $table->unsignedBigInteger("id_konselor");
            $table->unsignedBigInteger("id_pengaju");
            $table->string("keterangan");
            $table->string("catatan_konselor");
            $table->dateTime("tanggal", $precision-)
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
}

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
        Schema::create("detail_siswa", function(Blueprint $table){
            $table->id("id_ds");
            $table->string("nis",25);
            $table->string("hobi");
            $table->string("nama_ayah");
            $table->string("tanggal_lahir_ayah");
            $table->string("tempat_lahir_ayah");
            $table->string("nama_ibu");
            $table->string("tanggal_lahir_ibu");
            $table->string("tempat_lahir_ibu");
            $table->string("nama_wali");
            $table->string("tanggal_lahir_wali");
            $table->string("tempat_lahir_wali");
            $table->string("pekerjaan_ayah");
            $table->string("pekerjaan_ibu");
            $table->string("pekerjaan_wali");
            $table->string("agama_ayah");
            $table->string("agama_ibu");
            $table->string("agama_wali");
            $table->string("alamat_ayah");
            
            $table->foreign("nis")->references("nis")->on("siswa");
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

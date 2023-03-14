<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder; 

class DataSiswaController extends Controller
{
    public function siswaaktif(){
        $siswa = Siswa::orderBy("id_angkatan","desc")->orderBy("id_jurusan","desc")->orderBy("no_absen")->whereHas("angkatan",function(Builder $q){
          $q->whereRaw("(tahun_mulai + 3 ) >".date("Y"));
        })->get();

       // dd($siswa);x
        return view("admin.siswaaktif",["siswa"=>$siswa]);
    }

    public function detailsiswa($id){

        //VIEW
        $siswa = Siswa::with("jurusan")->with("detail")->with("angkatan")->find($id);
     
        $kolomdetail = Siswa::getColumn();

        foreach($kolomdetail as $i=>$kd){
            $kolomdetail[$i]["display"] = ucwords(str_replace("_"," ", $kd));
            $kolomdetail[$i]["real"] = $kd
        }

        unset($kolomdetail[0]);
        $kolomdetail[1] = "NIS";

    // dd($kolomdetail);
       // dd($siswa);
        return view("admin.detailsiswa",["siswa"=>$siswa ,"kolomdetail"=>$kolomdetail]);
    }
}

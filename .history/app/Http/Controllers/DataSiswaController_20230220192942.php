<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder; 

class DataSiswaController extends Controller
{
    public function siswaaktif(){
        $siswa = Siswa::orderBy("id_angkatan","desc")->orderBy("id_jurusan","desc")->whereHas("angkatan",function(Builder $q){
          $q->whereRaw("(tahun_mulai + 3 ) >".date("Y"));
        })->get();

       // dd($siswa);x
        return view("admin.siswaaktif",["siswa"=>$siswa]);
    }

    public function detailsiswa($id){
        $siswa = Siswa::with("jurusan")->with("detail_siswa")->with("angkatan")->find($id);
        dd(Siswa::)
       // dd($siswa);
        return view("admin.detailsiswa",["siswa"=>$siswa]);
    }
}

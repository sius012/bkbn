<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder; 

class DataSiswaController extends Controller
{
    public function siswaaktif(){
        $siswa = Siswa::orderBy("id_angkatan","desc")->whereHas("angkatan",function(Builder $q){
          $q->whereRaw("tahun_mulao");
        })->get();
        return view("admin.siswaaktif",["siswa"=>$siswa]);
    }
}

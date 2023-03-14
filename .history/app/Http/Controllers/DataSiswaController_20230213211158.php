<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
class DataSiswaController extends Controller
{
    public function siswaaktif(){
        $siswa = Siswa::orderBy("id_angkatan","desc")->whereHas(["angkatan"=>function($q){
            $q->where(DB::raw("tahun_mulai + 3"),"<",date(""))
        }])->paginate(30);
        return view("admin.siswaaktif",["siswa"=>$siswa]);
    }
}

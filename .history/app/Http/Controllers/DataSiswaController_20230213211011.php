<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\D
class DataSiswaController extends Controller
{
    public function siswaaktif(){
        $siswa = Siswa::orderBy("id_angkatan","desc")->whereHas(["angkatan"=>function($q){
            $q->where(DB)
        }])->paginate(30);
        return view("admin.siswaaktif",["siswa"=>$siswa]);
    }
}

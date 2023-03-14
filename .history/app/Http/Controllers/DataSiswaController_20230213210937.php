<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class DataSiswaController extends Controller
{
    public function siswaaktif(){
        $siswa = Siswa::orderBy("id_angkatan","desc")->whereHas(["angkatan"=>function($q){
            $q->
        }])->paginate(30);
        return view("admin.siswaaktif",["siswa"=>$siswa]);
    }
}

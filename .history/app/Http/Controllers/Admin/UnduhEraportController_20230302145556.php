<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class UnduhEraportController extends Controller
{
    public function unduheraport(Request $req){
        $paramParse = explode(":",$req->param2);
        $angkatan = $paramParse[0];
        $jurusan = $paramParse[1];
        
        $siswa = Siswa::where("id_angkatan", $angkatan)
    }
}

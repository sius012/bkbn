<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Exports\RaporKarakter\Master as RaporKelas;
use App\Models\Angkatan;

class UnduhEraportController extends Controller
{
    public function unduheraport(Request $req){
        
        $paramParse = explode(":",$req->param2);
        $angkatan = $paramParse[0];
        $jurusan = $paramParse[1];

        $bulanDari = (int) ltrim(date("m", strtotime($req->dari)),0);
        $bulanSampai = (int) ltrim(date("m", strtotime($req->sampai)),0);

        $semester = "";

        if($bulanSampai > 6){
            $semester = "Genap";
        }else{
            $semester = "Ganjil";
        }
        
        
        
        return (new RaporKelas($angkatan, $jurusan,$semester) )->download("Rapor Karakter.xlsx");
    }

    public function check(){
        return view("eraport.check");
    }

}

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

        $bulanDari = ltrim(0,date("m", strtotime($req->dari)));
        $bulanSampai = ltrim(date("m", strtotime($req->sampai)));

        dd($bulanSampai);
        
        
        
        return (new RaporKelas($angkatan, $jurusan) )->download("Rapor Karakter.xlsx");
    }
}

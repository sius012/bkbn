<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Exports\RaporKarakter\RaporKarakter;

class UnduhEraportController extends Controller
{
    public function unduheraport(Request $req){
        $paramParse = explode(":",$req->param2);
        $angkatan = $paramParse[0];
        $jurusan = $paramParse[1];
        
        
        return (new Inv)
    }
}

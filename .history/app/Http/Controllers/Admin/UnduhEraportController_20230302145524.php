<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnduhEraportController extends Controller
{
    public function unduheraport(Request $req){
        $paramParse = explode(":",$req->param2);
        $angkatan = $paramParse[0];
        $jurusan = $paramParse
        dd($paramParse);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class DataSiswaController extends Controller
{
    public function siswaaktif(){
        $siswa = Siswa::paginate();
        return view("admin.siswaaktif",["siswa"=>$siswa]);
    }
}

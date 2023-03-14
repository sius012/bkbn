<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PengajuanKonseling;
use Illuminate\Support\Facades\Auth;

class KonselingController extends Controller
{
    public function ajukankonseling(){
        $admin = User::role("admin")->get();

        return view("siswa.ajukankonseling", ["admin"=>$admin]);
    }

    public function buatkonseling(Request $req){
        $pengaduankonseling = [
            "id_konselor"=>$req->konselor,
            "id_pengaju"=>$req->keterangan,
            'tanggal'=>date("Y-m-d H:i:s")
        ];

        PengajuanKonseling
    }
}

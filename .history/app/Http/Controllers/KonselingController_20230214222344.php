<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PengajuanKonseling;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class KonselingController extends Controller
{
    public function ajukankonseling(){
        $admin = User::role("admin")->get();

        return view("siswa.ajukankonseling", ["admin"=>$admin]);
    }

    public function buatkonseling(Request $req){
      //      dd($req);
        $pengaduankonseling = [
            "id_konselor"=>$req->konselor,
            "id_pengaju"=>$req->keterangan,
            'tanggal'=>Carbon
            'keterangan'=>$req->keterangan
        ];

        PengajuanKonseling::create($pengaduankonseling);
    }
}

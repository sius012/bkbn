<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PengajuanKonseling;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

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
            "id_pengaju"=>Auth::user()->id,
            'tanggal'=>Carbon::now()->toDateTimeString(),
            'keterangan'=>$req->keterangan
        ];




       PengajuanKonseling::create($pengaduankonseling);
       Alert::success('Data Berhasil dikirim', 'Sukses');


       return redirect()->back();
    }

    public function riwayatkonseling(Request $req){
        $datakonselingsaya = PengajuanKonseling::with("konselor")->where("id_pengaju", Auth::user()->id)->get();
        
       // dd($datakonselingsaya);
        return view("siswa.riwayatkonseling", ["konsel"=>$datakonselingsaya]);
    }


    public function pengajuanmasuk(Request $req){
        $pengajuanmasuk = PengajuanKonseling::where("id_konselor",Auth::user()->id)->with(["pengaju","konselor"])->get();
        return view("admin.pengajuanmasuk",["pengajuanmasuk"=>$pengajuanmasuk]);
    }


    public function kirimcatatan(Request $req){
        $note = $req->catatan;
        $tanggal = $req->tanggal;
        $id = $req->id_pk;

        dd($req);

        //change tanggal
        PengajuanKonseling::create
    }
}

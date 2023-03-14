<?php

namespace App\Http\Controllers;
use App\Imports\Raport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Angkatan;
use App\Models\Jurusan;

class EraportController extends Controller
{
    public function eraport(Request $req){
        return view("eraport.eraport");
    }

    public function importexcel(Request $req){
      //  dd($req);
       $data = Excel::import(new Raport, $req->file('file'));

       dd($data);


    }

    public function masukanraport(Request $req){
        $kelas = [];
        $angkatanaktif = Angkatan::where(DB::raw("tahun_mulai + 3"),">=", date("Y"))->get();

        foreach($angkatanaktif  as $i => $a){
            $jurusan = Jurusan::all();
            foreach($jurusan as $j => $jr){
                [
                    $kelas[$i][$j] = [
                        "jurusan"=>$jr->id_jurusan,
                        "angkatan"=>$a->id_angkatan,
                        "tahun_mulai"=>$a->tahun_mulai,
                        "kelas_display"=> (12-$i) . " ".$jr->jurusan
                    ]
                    ];
            }

            
        }

    //dd($kelas);
        
        return view("eraport.masukanraport",['kelas'=>$kelas]);
    }

    public function injectraport(Request $req){

       // dd($req);
      $data = Excel::toArray(new Raport, $req->file('file'));


      dd($data[8]);
    }
}

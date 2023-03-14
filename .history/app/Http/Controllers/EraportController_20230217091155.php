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
    
      $rows = Excel::toArray(new Raport, $req->file('file'))[1];
    
   // dd($rows);
    
      $nilai4b = [];
     $currentpoint = [];
     $currentsubpoint = [];
     foreach($rows as $i => $row){
          
          if($i > 6){
              if(!$this->hasNumber((string) $row[0])){
                  if($i != 7){
                      if($this->hasNumber((string) $rows[$i-1][0])){
                          $currentsubpoint["no"] = $rows[$i][0];
                       }else{
                          $currentpoint = $rows[$i-1][1];
                          $currentsubpoint = $rows[$i][1];
                       }
                  }else{
                     $currentsubpoint = $rows[$i+1][1];
                     $currentpoint = "hello";
                  }
                 
              }else{
                  $pointArr = explode("=",$currentpoint);
                  array_push($nilai4b, [
                      "point"=>str_replace([":"],"",$pointArr[0]),
                      "subpoint"=>str_replace([":"],"",$currentsubpoint),
                      "no_subpoint"=>$row[0],
                      "no_subpoint"=>$row[0],
                      "keterangan"=>$row[1]]);
              }


             
          }
     }


  //    foreach($nilai4b as $n){
  //         Aspek4B::create($n);
  //    }
     dd($nilai4b);


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
        $nilaisiswa = [];
       // dd($req);
      $data = Excel::toArray(new Raport, $req->file('file'));
        $currentSubpoint = "";
        foreach($data[1] as $d => $ds){
           
            if($d > 6){
                if(!$this->hasNumber((string) $ds[0])){

                        $currentSubpoint = $ds[0];
                    
                  
                }else{
                    foreach($ds as $e => $dss){
                        if($e > 1){
                            $nilaisiswa[$d][$e] = 
                            [
                                "no_absen"=>$e-1,
                                "nilai"=>$dss,
                                "aspek"=>$ds[1],
                                "subpoint"=>$currentSubpoint
                            ];
                        }
                    }
                }
                
            }
        }

        dd($nilaisiswa);
    }

    public function hasNumber($str){
        $isThereNumber = false;
        for ($i = 0; $i < strlen($str); $i++) {
            if ( ctype_digit($str[$i]) ) {
                $isThereNumber = true;

                return $isThereNumber;
                break;
            }
            }
    }
}

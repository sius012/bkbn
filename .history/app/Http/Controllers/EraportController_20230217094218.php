<?php

namespace App\Http\Controllers;
use App\Imports\Raport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Angkatan;
use App\Models\Jurusan;
use App\Models\Aspek4B;

class EraportController extends Controller
{
    public function eraport(Request $req){
        return view("eraport.eraport");
    }

    public function importexcel(Request $req){
    
      $rows = Excel::toArray(new Raport, $req->file('file'))[1];
    
   // dd($rows);
    
      $nilai4b = [];
     $currentpoint = [
        "point" =>"ini",
        "no"=>"init"
     ];
     $currentsubpoint = [
        "point" => "init",
        "no"=>"init"
     ];

 


     foreach($rows as $i => $row){
          
          if($i > 6){
              if(!$this->hasNumber((string) $row[0])){
                  if($i != 7){
                      if($this->hasNumber((string) $rows[$i-1][0])){
                          $currentsubpoint["no"] = $rows[$i][0];
                          $currentsubpoint["point"] = $rows[$i][1];                                                                                                                                                    
                       }else{
                          $currentpoint["point"] = $rows[$i-1][1];
                          $currentpoint["no"] = $rows[$i-1][0];
                          $currentsubpoint["point"] = $rows[$i][1];
                          $currentsubpoint["no"] = $rows[$i][0];
                       }
                  }else{
                     $currentsubpoint["point"] = $rows[$i+1][1];
                     $currentsubpoint["no"] = $rows[$i+1][0];
                     $currentpoint["point"] = "hello";
                     $currentsubpoint["no"] = "hello";
                  }
                 
              }else{
                  $pointArr = explode("=",$currentpoint["point"]);
                  array_push($nilai4b, [
                      "point"=>str_replace([":"],"",$pointArr[0]),
                      "subpoint"=>str_replace([":"],"",$currentsubpoint["point"]),
                      "no_aspek"=>$row[0],
                      "no_point"=>str_replace(["."],"",$currentpoint["no"]),
                      "no_subpoint"=>str_replace(["."],"",$currentsubpoint["no"]),
                      "keterangan"=>$row[1]]);
              }


             
          }
     }


     foreach($nilai4b as $n){
          Aspek4B::create($n);
     }
    // dd($nilai4b);


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

      //  dd($req);
        $rows = Excel::toArray(new Raport, $req->file('file'))[1];
    
    // dd($rows);
        
        $nilai4b = [];
        $currentpoint = [
            "point" =>"ini",
            "no"=>"init"
        ];
        $currentsubpoint = [
            "point" => "init",
            "no"=>"init"
        ];

    


        foreach($rows as $i => $row){
            
            if($i > 6){
                if(!$this->hasNumber((string) $row[0])){
                    if($i != 7){
                        if($this->hasNumber((string) $rows[$i-1][0])){
                            $currentsubpoint["no"] = $rows[$i][0];
                            $currentsubpoint["point"] = $rows[$i][1];                                                                                                                                                    
                        }else{
                            $currentpoint["point"] = $rows[$i-1][1];
                            $currentpoint["no"] = $rows[$i-1][0];
                            $currentsubpoint["point"] = $rows[$i][1];
                            $currentsubpoint["no"] = $rows[$i][0];
                        }
                    }else{
                        $currentsubpoint["point"] = $rows[$i+1][1];
                        $currentsubpoint["no"] = $rows[$i+1][0];
                        $currentpoint["point"] = "hello";
                        $currentsubpoint["no"] = "hello";
                    }
                    
                }else{
                    $pointArr = explode("=",$currentpoint["point"]);
                    array_push($nilai4b, [
                        "point"=>str_replace([":"],"",$pointArr[0]),
                        "subpoint"=>str_replace([":"],"",$currentsubpoint["point"]),
                        "no_aspek"=>$row[0],
                        "no_point"=>str_replace(["."],"",$currentpoint["no"]),
                        "no_subpoint"=>str_replace(["."],"",$currentsubpoint["no"]),
                        "keterangan"=>$row[1]]);
                    foreach($row as $r =>$rowia){
                        if($r>1){
                            if(isset($row[$r+1])){
                                if($row[$r+1 != null]){
                                    $penilaian = [
                                        "no_absen"=>$r-1,
                                        ""
                                    ];
                                    echo $rows[6][$r]."<br>";
                                }
                            }
                            
                        }   
                        
                    }
                    
                }


                
            }
        }
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

<?php

namespace App\Http\Controllers;
use App\Imports\Raport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Angkatan;
use App\Models\Jurusan;
use App\Models\Aspek4B;
use App\Models\Penilaian;
use App\Models\AspekDPG;
use App\Models\DetailPG;
use App\Models\PenilaianGuru;
use App\Models\Siswa;


use App\Exports\RaportExcel;
use Illuminate\Support\Facades\Auth;


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
       
        
        
        $list = PenilaianGuru::with("detail_pg.siswa")->with(["detail_pg"=>function($q){
            $q->where("nis_siswa", 82615029)->with("aspek_dpg");
        }])->get();
      //  dd($list[0]);










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

    public function validasiraport(Request $req){
        $tablevalidasi = [];
        $tablevalidasi["Rentang Waktu Penilaian"] = false;
        $tablevalidasi["Kesamaan Jumlah Siswa"] = false;
        $tablevalidasi["Letak Kolom Kelas dan Jurusan"] = false;
        $tablevalidasi["Kelas ditemukan"] = false;
        $tablevalidasi["Jurusan sesuai"] = false;
        $param =  explode(":",$req->param);
        $angkatan = Angkatan::find($param[0]);
        $jurusanril = Jurusan::find($param[1]);

        $kelasril = $angkatan->kelas();


        //Excel Sheet
        $rows = Excel::toArray(new Raport, $req->file('file'));

        $finallyRow = null;
        $bulan = ltrim(date("m", strtotime($req->tanggal)),0));
        //Valdasi rentang waktu
        $tablevalidasi["Rentang Waktu Penilaian"] = PenilaianGuru::whereMonth("tanggal_penilaian", date("m", strtotime($req->tanggal)))->whereYear("tanggal_penilaian",date("Y", strtotime($req->tanggal)))->where("id_penilai", Auth::user()->id)->where("id_angkatan", $param[0])->where("id_jurusan", $jurusanril->jurusan)->count();
        
        
        foreach($rows as $i => $rws){
            if(isset($rws[3][1])){
                $tablevalidasi["Letak Kolom Kelas dan Jurusan"] = true;
                $kelasclear = trim(str_replace(":","", $rws[3][1]));
                $kelasclear = explode(" ",$kelasclear);
                $kelas=  $this->roman_to_decimal($kelasclear[0]);
                $jurusan = $kelasclear[1];
                if($kelas == $kelasril){
                    $tablevalidasi["Kelas ditemukan"] = true;
                    if($jurusanril->jurusan == $jurusan){
                        $tablevalidasi["Jurusan sesuai"] = true;

                        $finallyRow = $rws;
                    }else{
                       
                    }
                }else{
                    
                }
            }
        }

       // dd($finallyRow);

        $jumlahsiswa = Siswa::where('id_angkatan', $angkatan)->where("id_jurusan",$jurusan)->count();
        dd($tablevalidasi);

    }


    public function injectraport(Request $req){

        $param =  explode(":",$req->param);
        $angkatan = $param[0];
        $jurusan = $param[1];


        

      //dd($req);
        $rows = Excel::toArray(new Raport, $req->file('file'))[1];
    
    // dd($rows);
        
        $penilaians = [];
        $ketarangan = [];
        $listSiswa = [];

        $currentpoint = [
            "point" =>"ini",
            "no"=>"init"
        ];
        $currentsubpoint = [
            "point" => "init",
            "no"=>"init"
        ];

        //Make Penilaian
    


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
                    

                    //gettheketerangan
                    if(isset($rows[$i-1])){
        
                        if($this->hasNumber((string) $rows[$i-1][0]) and $rows[$i][0] == null){
                       
                            foreach($row as $j =>$rk){
                                if($j>1){
                                    if($row[$j]!=null){
                                        array_push($ketarangan,["no"=>$j-1,
                                        "keterangan"=>$rk
                                        
                                         ]);
                                    
                                    array_push($listSiswa,$j-1);


                                    }
                                   
                                }
                            }
                        }
                    }
                   

                }else{
                    $pointArr = explode("=",$currentpoint["point"]);
                    $value =  [
                        "point"=>str_replace([":"],"",$pointArr[0]),
                        "no_aspek"=>$row[0],
                        "no_point"=>str_replace(["."],"",$currentpoint["no"]),
                        "no_subpoint"=>str_replace(["."],"",$currentsubpoint["no"])];
                 //   array_push($nilai4b,$value);
                    foreach($row as $r =>$rowia){
                        if($r>1){
                            if(isset($row[$r+1])){
                                if($row[$r+1 != null]){
                                    $penilaian = array_merge([
                                        "no_absen"=>$r-1,
                                        "nilai"=>$rowia,
                                        
                                    ],$value);
                                    array_push($penilaians,$penilaian);
                                }
                            }
                            
                        }   
                        
                    }
                    
                }


                
            }
        }


   //    dd($ketarangan);
        //DATABASE EXECUTE
        DB::beginTransaction();
        
            try {

                //Penilaian Guru
                $penilaian = PenilaianGuru::create([
                    "id_angkatan"=>$angkatan,
                    "id_jurusan"=>$jurusan,
                    "id_penilai"=>Auth::user()->id,
                    "keterangan"=>"sipp",
                    "tanggal_penilaian"=>$req->tanggal
                ]);

                //Detail Penilaian Guru
                $id_pg = [];

                foreach($listSiswa as $l=> $ls){
                    $id_siswa = Siswa::where("no_absen",$ls)->where("id_angkatan",$angkatan)->where("id_jurusan",$jurusan)->first();
                    $aspek = DetailPG::create([
                        "id_pg"=>$penilaian->id_pg,
                        "nis_siswa"=>$id_siswa->nis,
                        "keterangan"=>$ketarangan[$l]["keterangan"]
                    ]);

                    $id_pg[$ls] = $aspek;
                }

                //Aspek DPG
                foreach($penilaians as $p){
                    $iddpg = $id_pg[$p["no_absen"]]->id_dpg;
                    $id_siswa =  $id_pg[$p["no_absen"]]->id_siswa;
                    
                    //getaspek
                    $aspek = Aspek4B::where("no_subpoint",$p["no_subpoint"])->where("no_point", $p["no_point"])->where("no_aspek", $p["no_aspek"])->first();
                    $adpg = AspekDPG::create([
                        "id_dpg"=>$iddpg,
                        "id_aspek"=>$aspek->id_aspek,
                        "nilai"=>$p['nilai']
                    ]);
                }
               



            } catch (\Throwable $th) {
                dd($th);
                DB::rollBack();
            }
       
         DB::commit();
        
        //dd($ketarangan);
       return redirect()->back();
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


    public function raportkelas($angkatan,$jurusan){
        $listsiswa = Siswa::where("id_jurusan",$jurusan)->where("id_angkatan",$angkatan)->orderBy("no_absen","asc")->get();

      //  dd($listsiswa);
        return view("eraport.raport-kelas",["siswa"=>$listsiswa]);
    }

    public function detailraport($nis){
        $siswa = Siswa::find($nis);
        $list = PenilaianGuru::with("penilai")->where("id_penilai", Auth::user()->id)->whereHas("detail_pg",function($q) use($nis){
            $q->where("nis_siswa", $nis);
        })->with("detail_pg.siswa")->with(["detail_pg"=>function($q) use($nis){
            $q->where("nis_siswa", $nis)->with("aspek_dpg.aspek4B");
        }])->get();
       // dd($list[0]);
        //dd($list);
        //dd($list);
        return view("component.raport-karakter-siswa", ["listPenilaian"=>$list,"siswa"=>$siswa]);
    }


    public function unduhexcel($id_pg){
        $data = PenilaianGuru::find($id_pg);

        Excel::export(new RaportExcel($data),"tess.xlsx");
       // dd($data);
    }


    public function raportkelasdetail($angkatan, $jurusan){
        $penilaian = PenilaianGuru::where("id_penilai", Auth::user()->id)->where("id_angkatan",$angkatan)->where("id_jurusan", $jurusan)->get();

      
        return view("eraport.raportkelasdetail",["penilaian"=>$penilaian]);
    }


    function roman_to_decimal($roman_numeral) {
        $romans = array("M"=>1000, "CM"=>900, "D"=>500, "CD"=>400, "C"=>100, "XC"=>90, "L"=>50, "XL"=>40, "X"=>10, "IX"=>9, "V"=>5, "IV"=>4, "I"=>1);
        $decimal = 0;
        foreach ($romans as $key => $value) {
            while (strpos($roman_numeral, $key) === 0) {
                $decimal += $value;
                $roman_numeral = substr($roman_numeral, strlen($key));
            }
        }
        return $decimal;
    }
    
   
}



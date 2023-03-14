<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder; 
use App\Models\DetailSiswa;
use App\Models\Angkatan;
use App\Models\Jurusan;



class DataSiswaController extends Controller
{
    public function siswaaktif(){
        $jurusan = Jurusan::all();
        $angkatan = Angkatan::all();

        $siswa = new Siswa;
        $siswa->

        $siswa->orderBy("id_angkatan","desc")->orderBy("id_jurusan","desc")->orderBy("no_absen")->whereHas("angkatan",function(Builder $q){
          $q->whereRaw("(tahun_mulai + 3 ) >".date("Y"));
        })->get();

       // dd($siswa);x
        return view("admin.siswaaktif",["siswa"=>$siswa, "angkatan"=>$angkatan, "jurusan"=>$jurusan]);
    }

    public function detailsiswa($id){

        //VIEW
        $siswa = Siswa::with("jurusan")->with("detail")->with("angkatan")->find($id);
     
        $kolomdetail = Siswa::getColumn();
        $kolomdetailArr = [];

        //Get Siswa Detail
        $datadetail = DetailSiswa::where("nis", $id)->first()->toArray();

        
        //dd($datadetail);    
        
        //getDetaDetail
    
        foreach($kolomdetail as $i=>$kd){
            $kolomdetailArr[$i]["display"] = ucwords(str_replace("_"," ", $kd));
            $kolomdetailArr[$i]["real"] = $kd;
            if($kd == "nis"){
                $kolomdetailArr[$i]["value"] = $id;
            }else{
                $kolomdetailArr[$i]["value"] = null;
            }


            if(strpos($kd, "tanggal_") !== false){
                $kolomdetailArr[$i]["type"] = "date";
            }else{
                $kolomdetailArr[$i]["type"] = "text";
            }

            if($datadetail!=null){
                $kolomdetailArr[$i]["value"] = $datadetail[$kd];
            }
        }

        //dd($kolomdetailArr);



        
      //  dd($kolomdetailArr);

        unset($kolomdetailArr[0]);
         $kolomdetailArr[1]["display"] = "NIS";
        

    // // dd($kolomdetail);
    //    // dd($siswa);
   
    
    return view("admin.detailsiswa",["siswa"=>$siswa ,"kolomdetail"=>$kolomdetailArr]);
    }

    public function lengkapidatasiswa(Request $req, $nis){
       // dd($req);

       //checkdetailifavailable
      
        $input = $req->input();
     

        $count = DetailSiswa::where("nis",$input["nis"])->count();


        unset($input["_token"]);

        if($count<=0){
            $detailsiswa = DetailSiswa::create($input);
        }else{
            $nis = $input["nis"];
        
            $detailsiswa = DetailSiswa::where("nis",$req->nis)->update($input);
        }
      


        return redirect()->back();
    }
}

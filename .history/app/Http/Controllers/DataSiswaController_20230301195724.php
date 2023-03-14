<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder; 
use App\Models\DetailSiswa;
use App\Models\Angkatan;
use App\Models\Jurusan;
use App\Models\PengajuanKonseling;

class DataSiswaController extends Controller
{
    public function siswaaktif(Request $req){
        $jurusan = Jurusan::all();
        $angkatan = Angkatan::all();

        $siswa = new Siswa;
        

        if($req->filled("angkatan")){
            $siswa =$siswa->where("id_angkatan", $req->angkatan);
        }

        if($req->filled("jurusan")){
            $siswa =$siswa->where("id_jurusan", $req->jurusan);
        }

        if($req->filled("nama")){
            $siswa = $siswa->where("nama_siswa","LIKE","%".$req->nama."%");
        }


        $siswa = $siswa->orderBy("id_angkatan","desc")->orderBy("id_jurusan","desc")->orderBy("no_absen")->whereHas("angkatan",function(Builder $q){
          $q->whereRaw("(tahun_mulai + 4 ) >".date("Y"));
        })->get();
        

     //dd($siswa);   
        return view("admin.siswaaktif",["siswa"=>$siswa, "angkatan"=>$angkatan, "jurusan"=>$jurusan]);
    }

    public function detailsiswa($id){

        //VIEW
        $siswa = Siswa::with("jurusan")->with("detail")->with("user")->whereHas("user.konsel")->with("angkatan")->find($id);

        dd($id);
     
        $kolomdetail = Siswa::getColumn();
        $kolomdetailArr = [];

        $datakonsel = PengajuanKonseling::where("id_pengaju", $siswa->id_user)->get();
        //Get Siswa Detail
        $datadetail = DetailSiswa::where("nis", $id)->first();

        
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
   
    
    return view("admin.detailsiswa",["siswa"=>$siswa ,"kolomdetail"=>$kolomdetailArr,"datakonsel"=>$datakonsel]);
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

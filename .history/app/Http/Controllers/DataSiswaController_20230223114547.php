<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder; 
use App\Models\DetailSiswa;
class DataSiswaController extends Controller
{
    public function siswaaktif(){
        $siswa = Siswa::orderBy("id_angkatan","desc")->orderBy("id_jurusan","desc")->orderBy("no_absen")->whereHas("angkatan",function(Builder $q){
          $q->whereRaw("(tahun_mulai + 3 ) >".date("Y"));
        })->get();

       // dd($siswa);x
        return view("admin.siswaaktif",["siswa"=>$siswa]);
    }

    public function detailsiswa($id){

        //VIEW
        $siswa = Siswa::with("jurusan")->with("detail")->with("angkatan")->find($id);
     
        $kolomdetail = Siswa::getColumn();
        $kolomdetailArr = [];

        //Get Siswa Detail
        $datadetail = DetailSiswa::where("nis", $id)->first();

        

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
        }
        
      //  dd($kolomdetailArr);

        unset($kolomdetailArr[0]);
         $kolomdetailArr[1]["display"] = "NIS";
        

    // // dd($kolomdetail);
    //    // dd($siswa);
    $fillable =  preg_split("/\t+/", "nis	hobi	nama_ayah	tanggal_lahir_ayah	tempat_lahir_ayah	nama_ibu	tanggal_lahir_ibu	tempat_lahir_ibu	nama_wali	tanggal_lahir_wali	tempat_lahir_wali	pekerjaan_ayah	pekerjaan_ibu	pekerjaan_wali	agama_ayah	agama_ibu	agama_wali	alamat_ayah	alamat_ibu	alamat_wali	
    Query results operations");

    foreach($fillable as $f ){
        echo "'".$f."'"
    }
    
    //  return view("admin.detailsiswa",["siswa"=>$siswa ,"kolomdetail"=>$kolomdetailArr]);
    }

    public function lengkapidatasiswa(Request $req, $nis){
       // dd($req);
        $input = $req->input();
        unset($input["_token"]);

        $detailsiswa = DetailSiswa::create($input);

       

      //  return redirect()->back();
    }
}

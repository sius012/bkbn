<?php

namespace App\Http\Controllers;
use App\Imports\Raport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use App\Models\Angkatan;

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
        $angkatanaktif = 
        return view("eraport.masukanraport");
    }
}

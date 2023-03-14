<?php

namespace App\Http\Controllers;
use App\Imports\Raport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class EraportController extends Controller
{
    public function eraport(Request $req){
        return view("eraport.eraport");
    }

    public function importexcel(Request $req){
      //  dd($req);
       $data = Excel::toArray(new Raport, $req->file('file'));


    }

    public function masukanraport(Request $req){
        return view("eraport.masukanraport");
    }
}

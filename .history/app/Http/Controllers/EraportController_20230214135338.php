<?php

namespace App\Http\Controllers;
use App\Imports\Raport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class EraportController extends Controller
{
    public function eraport(Request $req){
        dd($req->file)
    }
}

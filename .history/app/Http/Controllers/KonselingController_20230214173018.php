<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Us

class KonselingController extends Controller
{
    public function ajukankonseling(){
        return view("siswa.ajukankonseling");
    }
}

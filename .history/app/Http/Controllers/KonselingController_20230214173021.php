<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KonselingController extends Controller
{
    public function ajukankonseling(){
        return view("siswa.ajukankonseling");
    }
}

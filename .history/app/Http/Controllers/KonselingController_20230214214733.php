<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KonselingController extends Controller
{
    public function ajukankonseling(){
        $admin = User::role("admin")->get();

        return view("siswa.ajukankonseling", ["admin"=>$admin]);
    }

    
}

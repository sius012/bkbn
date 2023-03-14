<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash

class KelolaPenggunaController extends Controller
{
    public function listadmin(){
        // $admin = User::role("admin");
       // dd($admin);
       return view("kelolapengguna.list-admin",["role"=>"admin"]);
    }

    public function tambahuser(Request $req){
        $sender = [
            "name"=>$req->nama,
            "email"=>$req->email,
            "password"=>$req->password,
            ""
        ];
    }
}

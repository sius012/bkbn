<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class KelolaPenggunaController extends Controller
{
    public function listadmin(){
        $admin = User::role("admin")->get();
     dd($admin[0]->getRoleNames());
       return view("kelolapengguna.list-admin",["role"=>"admin"]);
    }

    public function tambahuser(Request $req){
        $sender = [
            "name"=>$req->nama,
            "email"=>$req->email,
            "password"=>Hash::make($req->password),
        ];

        $user = User::create($sender);
        $user->assignRole($req->role);


    }
}

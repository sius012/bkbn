<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;

    protected $table = "angkatan";
    protected $primaryKey = "id_angkatan";
    public $timestamps = false;
    protected $fillable = [
        "id_angkatan",
        "tahun_mulai"
    ];

    public function kelas()
    {
         $angkatan = Angkatan::where("id_angkatan", $this->id_angkatan)->first();
         $tahunmasuk = $angkatan->tahun_mulai;
         $bulanmasuk = $angkatan->bulan_mulai;

        //     dd($tahunmasuk);
        $tahunberjalan = date("Y");
        $bulanberjalan = date("m");
        $kelas = $tahunberjalan - (int) $tahunmasuk + 9;
        return $kelas;
    }
}

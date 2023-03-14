<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "nis";
    public $timestamps = false;
    protected $fillable = [
        "nis","nama_siswa","id_jurusan","id_angkatan","tanggal_lahir","tempat_lahir","alamat","jenis_kelamin"
    ];
    use HasFactory;

    public function kelasdanjurusan(){
        $angkatan = A
    }
}

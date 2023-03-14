<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspek4B extends Model
{
    use HasFactory;

    protected $table = "aspek_4b";
    protected $primaryKey = "id_aspek";    
    public $timestamps = false;
    protected $fillable = [
        "nis",  "nama_siswa", "id_jurusan", "tanggal_lahir", "tempat_lahir", "alamat", "jenis_kelamin"
    ];
}

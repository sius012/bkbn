<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianGuru extends Model
{
    use HasFactory;
    protected $table = "penilaian_guru";
    protected $primaryKey = "id_pg";
    public $timestamps = false;
    protected $fillable = [
        "id_pg","id_angkatan","id_jurusan","id_penilai","keterangan","tanggal_penilaian"	
    ];
}

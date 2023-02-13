<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    protected $table = "angkatan";
    protected $primaryKey = "id_angkatan";
    public $timestamps = false;
    protected $fillable = [
        "id_angkatan","tahun_mulai","bulan_mulai"	
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspekDPG extends Model
{
    use HasFactory;

    protected $table="aspek_dpg";
    protected $primaryKey="id_dpg";
    public $timestamp=false;
    protected $fillable=["id_dpg","id_pg","id_siswa","keterangan"];
}

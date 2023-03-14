<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPG extends Model
{
    use HasFactory;

    protected $table="detail_pg";
    protected $primaryKey="id_dpg";
    public $timestamps = false;
    protected $fillable=["id_dpg","id_pg","nis_siswa","keterangan"];

    public function siswa(){}
    return $this->belongsTo("")
}

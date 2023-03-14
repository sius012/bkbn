<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanKonseling extends Model
{
    use HasFactory;


    protected $table="pengajuan_konseling";
    protected $primaryKey="id_pk";
    protected $fillable=["
    id_pk","id_konselor","id_pengaju","keterangan","catatan_konselor","tanggal"];
    public $timestamps=false;


    public function pengaju(){
        return $this->hasOne("")
    }
}

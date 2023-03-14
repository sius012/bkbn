<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPG extends Model
{
    use HasFactory;

    protected $table="detail_pg";
    protected $primaryKey="id_pg";
    protected $fillable=["
    id_pk","id_konselor","id_pengaju","keterangan","catatan_konselor","tanggal"];
}

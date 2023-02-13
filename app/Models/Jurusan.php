<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = "jurusan";
    protected $primaryKey = "id_jurusan";
    public $timestamps = false;
    protected $fillable = [
        "id_jurusan","jurusan","keterangan","created_at","updated_at"	
    ];
    use HasFactory;
}

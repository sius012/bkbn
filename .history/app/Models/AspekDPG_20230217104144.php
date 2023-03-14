<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AspekDPG extends Model
{
    use HasFactory;

    protected $table="aspek_dpg";
    protected $primaryKey="id_adpg";
    public $timestamp=false;
    protected $fillable=[
        "id_adpg""id_dpg","id_aspek","nilai"

    ];
}

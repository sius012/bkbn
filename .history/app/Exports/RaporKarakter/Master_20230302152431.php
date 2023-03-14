<?php

namespace App\Exports\RaporKarakter;


use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use An

class Master implements WithMultipleSheets
{
    use Exportable;

    private $angkatan;
    private $jurusan;

    public function __construct($angkatan, $jurusan)
    {
        $this->angkatan = $angkatan;
        $this->jurusan = $jurusan;
    }

    public function sheets() : array
    {
        $siswa = Siswa::where("id_angkatan", $this->angkatan)->where("id_jurusan", $this->jurusan)->get();
        
        $kelas = Angkatan::find($this->angkatan)->kelas();
        $sheets = [];
        $sheets[0] = new NamaSiswa($siswa,);
        return $sheets;

    }

}
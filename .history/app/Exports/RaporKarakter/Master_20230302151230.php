<?php

namespace App\Exports\RaporKarakter;



use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class RaporKarakter implements WithMultipleSheets
{
    use Exportable;

    private $angkatan;
    private $jurusan;

    public function __construct($angkatan, $jurasan)
    {
        $this->angkatan = $angkatan;
        $this->jurusan = $jurusan;
    }

    public function sheets() : array
    {
        $siswa = Siswa::where("id_angkatan", $angkatan)->where("id_jurusan", $jurusan)->get();
        
        $sheet = [];

        sheets[0] = new NamaSiswa($)
    }

}
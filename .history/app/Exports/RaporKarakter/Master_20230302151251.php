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
        $siswa = Siswa::where("id_angkatan", $this->angkatan)->where("id_jurusan", $this->jurusan)->get();
        
    

        sheets[0] = new NamaSiswa($siswa);
    }

}
<?php

namespace App\Exports\RaporKarakter;



use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class RaporKarakter implements WithMultipleSheets
{
    use Exportable;

    private $angkatan;
    private $jurusan;

    public function __construct($ag)
    {
        
    }

    public function sheets() : array
    {
        $sheet = [];

        sheets[0] = new NamaSiswa($)
    }

}
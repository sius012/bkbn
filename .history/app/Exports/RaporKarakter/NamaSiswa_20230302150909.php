<?php

namespace App\Exports\RaporKarakter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;

class NamaSiswa implements FromCollection,WithTitle
{
    private $daftarsiswa;
    public function __construct($daftarsiswa)
    {
        $this->daftarsiswa = $daftarsiswa
    }

    public function collection()
    {
        $
    }

    public function title(): string{
        return "Nama Siswa";
    }
}

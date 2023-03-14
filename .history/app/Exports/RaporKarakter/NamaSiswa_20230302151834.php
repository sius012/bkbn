<?php

namespace App\Exports\RaporKarakter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromView;

class NamaSiswa implements FromView,WithTitle
{
    private $daftarsiswa;
    public function __construct($daftarsiswa)
    {
        $this->daftarsiswa = $daftarsiswa;
    }

    public function collection()
    {
        return $this->daftarsiswa;
    }

    public function title(): string{
        return "Nama Siswa";
    }
}

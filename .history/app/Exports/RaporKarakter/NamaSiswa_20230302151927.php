<?php

namespace App\Exports\RaporKarakter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromView;

class NamaSiswa implements FromView,WithTitle
{
    private $daftarsiswa;
    private $kelas;
    private $daftarsiswa;
    public function __construct($daftarsiswa,$kelas,$jurusan)
    {
        $this->daftarsiswa = $daftarsiswa;
    }

    public function view() : View
    {
        $kelas = 
        return $this->daftarsiswa;
    }

    public function title(): string{
        return "Nama Siswa";
    }
}

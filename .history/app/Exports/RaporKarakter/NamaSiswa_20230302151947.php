<?php

namespace App\Exports\RaporKarakter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromView;

class NamaSiswa implements FromView,WithTitle
{
    private $daftarsiswa;
    private $kelas;
    private $jurusan;
    public function __construct($daftarsiswa,$kelas,$jurusan)
    {
        $this->daftarsiswa = $daftarsiswa;
        $this->daftarsiswa = $kelas;
        $this->daftarsiswa = $jurusan;
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

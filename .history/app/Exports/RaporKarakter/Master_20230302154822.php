<?php

namespace App\Exports\RaporKarakter;


use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Models\Angkatan;
use App\Models\Jurusan;

class Master implements WithMultipleSheets
{
    use Exportable;

    private $angkatan;
    private $jurusan;
    private $semester;

    public function __construct($angkatan, $jurusan, $semester)
    {
        $this->angkatan = $angkatan;
        $this->jurusan = $jurusan;
        $this->semester = $semester;
    }

    public function sheets() : array
    {
        $siswa = Siswa::where("id_angkatan", $this->angkatan)->where("id_jurusan", $this->jurusan)->orderBy("no_absen,"->get();
        
        $kelas = Angkatan::find($this->angkatan)->kelas();
        $jurusan = Jurusan::find($this->jurusan)->jurusan;

        $sheets = [];
        $sheets["Nama Siswa"] = new NamaSiswa($siswa,$kelas,$jurusan,$this->semester);
        return $sheets;

    }

}
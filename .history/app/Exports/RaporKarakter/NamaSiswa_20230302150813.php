<?php

namespace App\Exports\RaporKarakter;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;

class NamaSiswa implements FromCollection,WithTitle
{
    
    public function collection()
    {
        return
    }

    public function title(): string{
        return "Nama Siswa";
    }
}

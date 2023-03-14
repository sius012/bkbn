<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class RaporKarakter implements WithMultipleSheets
{
    use Exportable
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
}

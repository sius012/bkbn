<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class RaporKarakter implements WithMultipleSheets
{
    use Exportable;

    public function sheets(): array
    {
        $sheet =
    }

}

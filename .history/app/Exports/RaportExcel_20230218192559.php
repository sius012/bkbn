<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class RaportExcel implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
}

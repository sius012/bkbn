<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Raport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
       $nilai4b = [];

       foreach($rows as $i => $row){
            if($i > 6){
                arra
            }
       }

       return $nilai4b;
    }
}

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
        $isThereNumber = false;
        for ($i = 0; $i < strlen($string); $i++) {
            if ( ctype_digit($string[$i]) ) {
                $isThereNumber = true;
                break;
            }
        }
       }

       return $nilai4b;
    }
}

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
            $hasSubpoint = false;
            if($i > 6){
                if($row[$i] $isThereNumber = false;
                for ($i = 0; $i < strlen($string); $i++) {
                    if ( ctype_digit($string[$i]) ) {
                        $isThereNumber = true;
                        break;
                    }
                })
                array_push($nilai4b, $row);
            }
       }
       dd($nilai4b);
       return $nilai4b;
    }
}

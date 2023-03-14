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
            $hasSubpoint = true;
            if($i > 6){
                
                array_push($nilai4b, $row);
            }
       }
       dd($nilai4b);
       return $nilai4b;
    }
}

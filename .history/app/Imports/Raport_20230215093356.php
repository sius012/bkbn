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

       $currentpoint = "";
       $currentsubpoint = [];
       foreach($rows as $i => $row){
            
            if($i > 6){
                if(!$this->hasNumber((string) $row[0])){
                    if(isset($rows[$i-1])){
                        if($this->hasNumber((string) $rows[$i-1][0])){
                            $currentpoint = "tes";
                         }
                    }else{
                        $currentpoint = "tes";
                    }
                   
                }

                array_push($nilai4b, ["point"=>$currentpoint]);
            }
       }
       dd($nilai4b);
       return $nilai4b;
    }


    public function hasNumber($str){
        $isThereNumber = false;
        for ($i = 0; $i < strlen($str); $i++) {
            if ( ctype_digit($str[$i]) ) {
                $isThereNumber = true;

                return $isThereNumber;
                break;
            }
            }
    }
}

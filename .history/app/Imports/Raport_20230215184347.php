<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Aspek4B;


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
                    if($i != 7){
                        if($this->hasNumber((string) $rows[$i-1][0])){
                            $currentsubpoint = $row[1];
                         }else{
                            $currentpoint = $rows[$i-1][1];
                         }
                    }else{
                       $currentsubpoint = $rows[$i+1][1];
                       $currentpoint = "hello";
                    }
                   
                }else{
                    $pointArr = explode("=",$currentpoint);
                    array_push($nilai4b, [
                        "point"=>$pointArr[0],
                        "subpoint"=>$currentsubpoint,
                        "keterangan"=>$row[1]]);
                }


               
            }
       }
       foreach($nilai4b as $n){
            Aspek4B::create($)
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

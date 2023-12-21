<?php
namespace App\apiRepositories;

use Illuminate\Support\Arr;

class ValidationRep 
{
    public static function validate($data,$rules) {
        dd($data, $rules);
    }
    public static function makeRules($data) {
        $inform = [];
        foreach ($data as $key => $value) {
            if(strpos($key,"R") !== false){
                $indice = filter_var($key,FILTER_SANITIZE_NUMBER_INT);
                $inform[$indice][$key] = $value;
            }
        };
        dd($inform);
  
    }
}

<?php
namespace App\apiRepositories;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

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
        
        $rules = [];
        foreach ($inform as $key => $value) {
            $rule = "";
            foreach ($value as $key2 => $value2) {
                if(strpos($key2,"RfieldName") === false){
                    if(Str::containsAll($key2,[":","_"])){
                        $rule .= Str::between($key2, ':', '_').":".$value2."|";
                    }else{
                        $rule .= $value2."|";
                    }
                }
            }
            $rule = Str::replaceLast("|","", $rule);
            $rules[$value["RfieldName_".$key]] = $rule;  
        }
        return $rules;    
    }
}

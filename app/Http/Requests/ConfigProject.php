<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ConfigProject extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        // dd($request->all());
        $rules = [
            "ProjectName"=>"required|string",
            "ProjectDescription"=>"required|string",
            "origem_1"=>"url:https|required",
            "fieldName_1"=>"string|required",
            "fieldType_1"=>"string|required"
        ];
        foreach ($request->all() as $key => $value) {
            $indice = filter_var($key,FILTER_SANITIZE_NUMBER_INT);
            if($indice > 1){
                if(strpos($key,"origem") !== false){
                    $rules["origem_".$indice] = "url:https";
                }
                if(strpos($key,"fieldName") !== false){
                    $rules["fieldName_".$indice] = "string";
                }
                if(strpos($key,"fieldType") !== false){
                    $rules["fieldType_".$indice] = "string";
                }
            }
        }
        return $rules;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $hidden = ["token"];
    public function index(){
        return view("create.index")->with("title","Criando novo projeto");
    }
    public function store(Request $request){
        
        $variables = $request->all();
        $organization[0] = $variables["ProjectName"];
        $organization[1] = $variables["ProjectDescription"];
        foreach($variables as $key=>$value){
            if(strpos($key,"origem") !== false){
                $organization["origins"][] = $value;
            }
            if(strpos($key,"field") !== false){
                $indice = filter_var($key,FILTER_SANITIZE_NUMBER_INT);
                if(strpos($key,"Name") !== false){
                    $organization["fields"][$indice]["name"] = $value;
                }
                if(strpos($key,"Type") !== false){
                    $organization["fields"][$indice]["type"] = $value;
                }

            }
            
        }
    }
}

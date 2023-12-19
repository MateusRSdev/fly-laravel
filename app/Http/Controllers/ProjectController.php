<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Project;
use App\Http\Requests\ConfigProject;

class ProjectController extends Controller
{
    protected $hidden = ["_token"];
    public function index(){
        return view("create.index")->with("title","Criando novo projeto");
    }
    public function store(ConfigProject $request){

        dd($request->all());
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

        $created = Project::create([
            "name"=>$organization[0],
            "user_id"=>Auth::id(),
            "origin"=>$organization["origins"][0],
            "active"=>true,
            "config"=>json_encode($organization)
        ]);
        if($created){
            return redirect()->route("dashboard")->with("success","Seu projeto foi criado corretamente");
        }else{
            return redirect()->route("dashboard/create")->with("error","Ops! algo deu errado tente novamente");
        }

    }
}

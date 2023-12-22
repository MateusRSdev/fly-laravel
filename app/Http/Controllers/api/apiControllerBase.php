<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\apiRepositories\ValidationRep;
use Illuminate\Database\Eloquent\Casts\Json;

class apiControllerBase extends Controller
{
    function store(Request $request,$email) {
        $user = User::where("email",$email)->find(1)->projects()->where("name",)->get("config")->first();
        $config = Json::decode($user->config);
        dd($config,);
        foreach($user->projects as $project) {
            if(Hash::check($project->name, )){
                $activeProject = $project;
            }   
        }
        
        ValidationRep::validate($request->all(), $activeProject->config["fields"]);
    }
}

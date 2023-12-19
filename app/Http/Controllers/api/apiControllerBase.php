<?php

namespace App\Http\Controllers\api;

use App\apiRepositories\ValidationRep;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class apiControllerBase extends Controller
{
    function store(Request $request,$email) {
        // dd($request->all(),$email);
        $user = User::where("email",$email)->first();

        foreach($user->projects as $project) {
            if(Hash::check($project->name, $request->_token)){
                $activeProject = $project;
            }   
        }
        dd(request()->all());   
        $secureData = ValidationRep::validate($request->all(), $activeProject->config["fields"]);
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()){
            if(isset($request->home)){
                return view("index")->with("title","por enquanto sem nome");
            }
            return to_route("dashboard");
        }

        return view("index")->with("title","por enquanto sem nome");
    }
    public function dashboard()
    {
        $user = User::find(Auth::id());
        return view("dashboard")->with([
            "title"=>"por enquanto sem nome",
            "userLogged"=>$user,
        ]);
    }
}

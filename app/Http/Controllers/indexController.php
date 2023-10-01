<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view("index")->with("title","por enquanto sem nome");
    }
    public function dashboard()
    {
        return view("dashboard")->with([
            "title"=>"por enquanto sem nome",
            "userLogged"=>Auth::user()
        ]);
    }
}

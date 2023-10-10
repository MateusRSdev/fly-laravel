<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view("create.index")->with("title","Criando novo projeto");
    }
}

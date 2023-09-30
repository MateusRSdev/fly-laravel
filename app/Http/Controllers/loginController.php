<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("login.login")->with([
            "title"=>"Criar conta",
            "logged"=>"true"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("login.create")->with([
            "title"=>"Criar conta",
            "logged"=>"true"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "email"=>["required","email"],
            "password"=>["required","min:7"],
            "name"=>["required"],
        ]);

        $data = $request->except("_token");
        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);
        Auth::login($user,isset($data["rememberMe"]));
        return to_route("dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function singIn(Request $request)
    {
        $request->validate([
            "email"=>["required","email"],
            "password"=>["required","min:7"],
        ]);
        $data = $request->except("_token");
        Auth::attempt($data,isset($data["rememberMe"]));
        return to_route("dashboard");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

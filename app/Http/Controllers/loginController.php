<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

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
        $errors = $request->validate([
            "email"=>["required","email"],
            "password"=>["required","min:7"],
            "name"=>["required"]
        ]);
        dd($errors);
        User::create($request->all());

        return response()->json(User::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
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

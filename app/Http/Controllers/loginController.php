<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PDOException;

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
        try{
            Auth::logout();
            $user = User::create($data);
            Auth::login($user,isset($data["rememberMe"]));
        }catch (PDOException $e) {
            return to_route("createUser")->withErrors("Ops, algo deu errado","create");
        }
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
        // dd($request->rememberMe);
        $data = $request->except("_token","rememberMe");
        try {
            Auth::logout();
            Auth::attempt($data,isset($request->rememberMe));
        } catch (\Throwable $e) {
            return to_route("login")->withErrors("Ops, algo deu errado","login");
        }

        return to_route("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Auth::logout();
        return to_route("login");
    }
}

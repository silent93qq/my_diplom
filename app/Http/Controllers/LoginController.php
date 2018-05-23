<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest',['except'=>'logout']);
    }

    public function login(){
       if(!auth()->attempt(request(['email', 'password']))){
           return back()->withErrors([
           'status' => 'Неправильно введены данные'
           ]);
       }
       return redirect()->home();
   }

   public function index(){
       return view('auth.loginDip');
   }
}

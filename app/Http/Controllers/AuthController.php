<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(){
        return view('pages.front-end.Regisuser');
    }
    public function login(){
        return view('pages.front-end.Loginuser');
    }
    public function loginAdmin(){
        return view('pages.front-end.Loginadmin');
    }
}

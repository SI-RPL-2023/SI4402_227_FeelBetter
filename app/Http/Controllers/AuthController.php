<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

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
    public function userRegister(Request $request){
        $request->validate([
            'password' => 'confirmed'
        ]);
        $roleId = 0;
        if ($request->input('role') == 'Pasien') {
            $roleId = 2;
        } else {
            $roleId = 3;
        }
        $RegisterUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'id_role' => $roleId
        ]);
        if($RegisterUser){
            return redirect('/login');
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'proses registrasi gagal');
        return redirect('/register');
    }
    public function cekLoginUser(Request $request){   
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'proses login gagal');
        return redirect('/login');
    }
    public function cekLoginAdmin(Request $request){   
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin/dashboard');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'proses login gagal');
        return redirect('/LoginAdmin');
    }
     public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}

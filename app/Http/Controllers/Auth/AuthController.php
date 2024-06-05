<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function proses_login(LoginRequest $r){
            //memvalidasi data
            if($r -> validated()){
                //guard 'web' digunakan untuk otentikasi berbasis sesi
            if (Auth::guard('web')->attempt(
                ['email' => $r->email, 
                'password' => $r->password
                ]
            )) {
                return redirect('dashboard')->with('Pesan','Berhasil Login');
            }
            else{
                return back()->with('pesan','Periksa kembali Email dan Password anda!');
            }
        }
    }

    public function register(){
        return view('auth.register');
    }

    public function proses_regis(RegisterRequest $r){
        //proses register adalah proses memasukkan data ke dalam tabel user
        if ($r ->validated()){
            User::create([
                'name' => $r->name,
                'email' => $r->email,
                'password' => $r->password,
            ]);

            return redirect('/')->with('Pesan', 'Register Berhasil');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}

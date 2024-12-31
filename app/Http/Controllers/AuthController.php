<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){ 
        return view('pages.auth.register');
    }
    public function login() {
        return view('pages.auth.login');
    }
    
    public function register_proses(Request $request){
    // dd($request->all());
        $request->validate([
            'name' =>'required|min:3',
            'username' =>'required|unique:users',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6',
            'role' =>'required',
            // 'telephone' =>'required',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            // 'telephone =' => $request->telephone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function login_proses(Request $request) { 
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Proses autentikasi
        if (Auth::attempt($credentials)) {
            // Regenerasi session untuk keamanan
            $request->session()->regenerate();
  
            // Redirect berdasarkan role user
            $role = Auth::user()->role;
            if ($role === 'pengepul') {
                return redirect()->route('dashboard-pengepul');
            } elseif ($role === 'petani') {
                return redirect()->route('dashboard-petani');
            }
        }
        // Jika autentikasi gagal
        return redirect()->route('login')->with('error', 'Email atau password salah!');
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\gudang;
use App\Models\Kapasitas;
use App\Models\kualitas_kopi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Pengepul side
    public function dashboard_pengepul(){
        //Memunculkan data kapasitas sesuai dengan user yang login
        $id = Auth::user()->id_user;
        $kapasitas = Kapasitas::where('id_user', $id)
                    ->orderBy('created_at', 'desc')
                    ->with('jenis_kopis')
                    ->get();
        
        return view('pages.pengepul.dashboard', compact('kapasitas', 'id'));
    }

    public function profile_pengepul(User $user){
        // $id = Auth::user()->id_user;
        // dd(Auth::user()->image);
        return view('pages.pengepul.profil', compact('user'));
    }

    public function update_profile_pengepul_proses(Request $request, User $user){
        $id = Auth::user()->id_user;
        
        // dd($request);
        if($request->file('image') != null){
            $user->update([
                'id_user' => $id,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'image' => $request->file('image')->store('img-profil'),
                'alamat' => $request->alamat,
            ]);
        }else{
            $user->update([
                'id_user' => $id,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'alamat' => $request->alamat,
            ]);
        }
        
        return redirect()->route('profil-pengepul');
    }

    //Petani side
    public function dashboard_petani(){
        $kapasitas = Kapasitas::all()
                    ->where('kapasitas_terbaru', '>', 0);  

        $id = Auth::user()->id_user;
        return view('pages.petani.dashboard', compact('kapasitas', 'id'));
    }
 
}

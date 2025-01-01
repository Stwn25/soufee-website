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

    public function profile_pengepul(){
        $id = Auth::user()->id_user;
        return view('pages.pengepul.profil', compact('id'));
    }

    //Petani side
    public function dashboard_petani(){
        $kapasitas = Kapasitas::all()
                    ->where('kapasitas_terbaru', '>', 0);  

        $id = Auth::user()->id_user;
        return view('pages.petani.dashboard', compact('kapasitas', 'id'));
    }
 
}

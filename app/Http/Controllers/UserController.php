<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\gudang;
use App\Models\kualitas_kopi;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Pengepul side
    public function dashboard_pengepul(){
        return view('pages.pengepul.dashboard');
    }

    //Petani side
    public function dashboard_petani(){
        return view('pages.petani.dashboard');
    }

    public function penjemputan(){
        return view('pages.petani.penjemputan');
    }
}

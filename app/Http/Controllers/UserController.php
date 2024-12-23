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
    public function dashboard_petani(){
        return view('pages.petani.home');
    }
}

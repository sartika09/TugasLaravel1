<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Petugas;
use Illuminate\Http\Request;

class MasterController extends Controller
{

    public function content(){
        
        return view('separate.content');
        //dd($buku);
    }

    public function master(){
        return view('separate.master');
    }

}
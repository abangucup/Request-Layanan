<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pemohon;
use App\Models\Permintaan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Http\Request;

class PemohonController extends Controller
{
    public function index()
    {
        $user = auth()->user()->pemohon->id;
        $permintaans = Permintaan::all();
        $tanggapans = Tanggapan::all();
        $pemohon = Pemohon::where('id', $user)->first();
        // dd($pemohon->nama);
        return view('user.pemohon.index', compact(['permintaans', 'tanggapans', 'pemohon']));
    }

    public function store() {

    }
}

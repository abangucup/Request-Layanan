<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opd;
use App\Models\Permintaan;
use App\Models\User;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function listpermintaan()
    {
        // $opds = Opd::all();
        $permintaans = Permintaan::all();
        // $users = User::all();
        return view('admin.tanggapan.listpermintaan', compact(['permintaans']));
    }
}

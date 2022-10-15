<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cctv;
use App\Models\Internet;
use App\Models\Opd;
use App\Models\Permintaan;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $internet = Internet::all()->count();
        $website = Website::all()->count();
        $user = User::where('role', 'opd')->count();
        $opd = Opd::all()->count();
        $permintaan = Permintaan::all()->count();
        $cctv = Cctv::all()->count();
        return view('user.home', compact(['cctv', 'permintaan', 'opd', 'user', 'website', 'internet']));
    }
}

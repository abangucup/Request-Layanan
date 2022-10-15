<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cctv;
use App\Models\User;
use App\Providers\HealthServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Health\Checks\Checks\PingCheck;
use Spatie\Health\Facades\Health;

class DashboardController extends Controller
{
    public function index()
    {
        // $users = User::all();
        $cctvs = Cctv::all();
        return view('admin.dashboard', compact(['cctvs']));
    }

    public function ping()
    {
        // $ip = '127.0.0.1';
        // $port = '22';
        $url = 'https://layanan.bonebolangokab.go.id';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        $health = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        dd($ch);
    }
}

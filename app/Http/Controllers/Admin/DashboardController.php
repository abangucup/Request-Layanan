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
        $cctvs = Cctv::all();
        return view('admin.dashboard', compact(['cctvs']));
    }
}

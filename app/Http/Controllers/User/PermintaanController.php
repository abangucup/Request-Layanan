<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermintaanController extends Controller
{
    public function getrequest()
    {
        return view('user.permintaan.index');
    }
    // public function index()
    // {
    //     return view('user.permintaan.index');
    // }

    public function store(Request $request)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }

        dd($request);


    }
}

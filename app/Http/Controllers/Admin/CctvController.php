<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    public function userindex()
    {
        return view('user.cctv');
    }
    public function index()
    {
        return view('admin.cctv.index');
    }

    public function store(Request $request)
    {
        
    }
}

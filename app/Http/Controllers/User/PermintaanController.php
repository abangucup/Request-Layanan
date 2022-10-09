<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    public function index()
    {
        return view('user.permintaan.index');
    }
}

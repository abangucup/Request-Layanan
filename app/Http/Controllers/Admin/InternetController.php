<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternetController extends Controller
{
    public function userindex()
    {
        return view('user.internet');
    }
    public function index()
    {
        return view('admin.internet.index');
    }
}

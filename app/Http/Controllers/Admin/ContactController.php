<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function userindex()
    {
        return view('user.contact');
    }
    
    public function index()
    {
        return view('admin.kontak.index');
    }
}

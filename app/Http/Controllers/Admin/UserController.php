<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemohon;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contact()
    {
        $contacts = User::all()->where('role', 'admin');
        // dd($contacts);
        return view('user.contact', compact(['contacts']));
    }

    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('admin.pengguna.index', compact(['users']));
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function storeLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        // dd($request);
        // dd(Auth::attempt($request->only('username', 'password')));
        if (Auth::attempt($request->only('username', 'password'))) {
            $user = auth()->user()->role;
            // dd($user);
            if ($user == 'admin') {
                alert()->success('Berhasil Login','Selamat Datang '.auth()->user()->nama.' Anda Sebagai '.$user);
                return redirect()->route('dashboard');
            } 
            // elseif ($user == 'opd') {
            //     return redirect()->route('home');
            // }
            return redirect()->route('home');

        }
        
        return back()->with('status', 'Username atau Password salah');
    }

    public function register()
    {
        return view('auth.register');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pemohon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
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
                alert()->success('Berhasil Login', 'Selamat Datang ' . auth()->user()->nama . ' Anda Sebagai ' . $user);
                return redirect()->route('dashboard');
            } elseif (auth()->user()->pemohon->bidang_id == null) {
                alert()->info('Update Data', 'Harap Update Biodata Terlebih Dahulu');
                return redirect()->route('bidang.index');
            }
            return to_route('home');
            
        }

        return back()->with('status', 'Username atau Password salah');
    }

    public function register()
    {

        return view('auth.register');
    }

    public function storeRegis(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            // 'profile',
            'nama' => 'required',
            'email' => 'required|unique:pemohons',
            'username' => 'required|unique:pemohons',
            'password' => 'required',
            'no_hp' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            alert()->error('Duplicate', 'Data Dulicate');
            return to_route('home');
        }

        $pemohon = new Pemohon();
        $pemohon->nama = $request->nama;
        $pemohon->email = $request->email;
        $pemohon->username = $request->username;
        $pemohon->password = Hash::make($request->password);
        $pemohon->no_hp = $request->no_hp;
        $pemohon->jk = $request->jk;
        $pemohon->alamat = $request->alamat;

        $pemohon->save();

        $user = new User();
        $user->username = $pemohon->username;
        $user->password = Hash::make($request->password);
        $user->pemohon_id = $pemohon->id;
        $user->role = 'opd';

        $user->save();

        alert()->success('Register Berhasil', 'Silahkan Login');
        return to_route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}

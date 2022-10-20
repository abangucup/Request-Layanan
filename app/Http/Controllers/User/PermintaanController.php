<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PermintaanController extends Controller
{
    public function getrequest()
    {
        return view('user.permintaan.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'domain' => 'required|unique:permintaans',
            'program' => 'required',
            'keterangan' => 'required',
            'userhost' => 'required|unique:permintaans',
            'passhost' => 'required',
        ]);

        if ($validator->fails()) {
            alert()->error('Duplicate', 'Data Dulicate');
            return back();
        }

        $permintaan = new Permintaan();
        $permintaan->domain = $request->domain;
        $permintaan->program = $request->program;
        $permintaan->userhost = $request->userhost;
        $permintaan->passhost = $request->passhost;
        $permintaan->keterangan = $request->keterangan;
        $permintaan->user_id = auth()->user()->id;

        $permintaan->save();

        alert()->success('Permintaan Terkirim', 'Domain ' . $request->domain . ' Akan Segera Diproses');
        return back();
    }
}

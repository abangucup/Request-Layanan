<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\Opd;
use App\Models\Pemohon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BidangController extends Controller
{
    public function index()
    {
        $opds = Opd::all();
        return view('user.bidang.index', compact(['opds']));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'opd_id' => 'required',
            'bidang' => 'required',
            'jabatan' => 'required',
        ]);

        if ($validator->fails()) {
            alert()->error('Gagal', 'Data Gagal Ditambahkan Coba Lagi');
            return back();
        }

        $bidang = new Bidang();
        $bidang->opd_id = $request->opd_id;
        $bidang->bidang = $request->bidang;
        $bidang->jabatan = $request->jabatan;

        $bidang->save();

        $pemohon = Pemohon::findOrFail(auth()->user()->pemohon->id);
        $pemohon->bidang_id = $bidang->id;
        $pemohon->save();
        // dd($pemohon->bidang_id);

        alert()->success('Update Bidang', 'Berasih Update Biodata');
        return to_route('getrequest');
    }

}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Opd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OpdController extends Controller
{
    public function index()
    {
        $opds = Opd::all();
        return view('admin.opd.index', compact(['opds']));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'profile',
            'nama' => 'required|unique:opds',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            alert()->error('Duplicate', 'Data Dulicate');
            return back();
        }

        $opd = new Opd();
        $opd->nama = $request->nama;
        $opd->deskripsi = $request->deskripsi;

        $opd->save();

        alert()->success('Tambah OPD', 'Berasih Menambahkan OPD '.$request->nama);
        return back();
    }

    public function destroy($id)
    {
        $opd = Opd::findOrFail($id);
        $opd->delete();
        alert()->info('OPD Dihapus', 'OPD '.$opd->nama. ' Berhasil Dihapus');
        return back();
    }
}

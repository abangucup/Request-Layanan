<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pemohon;
use App\Models\Permintaan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class PemohonController extends Controller
{
    public function index()
    {
        $user = auth()->user()->pemohon->id;
        $permintaans = Permintaan::all();
        $tanggapans = Tanggapan::all();
        $pemohon = Pemohon::where('id', $user)->first();
        // dd($pemohon->nama);
        return view('user.pemohon.index', compact(['permintaans', 'tanggapans', 'pemohon']));
    }

    public function store() {



    }

    public function update(Request $request, $id)
    {
        // dd($request->profile);
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|unique:pemohons,email,'.$id,
            'alamat' => 'required',
            'jk' => 'required',
            'no_hp' => 'required'
        ]);

        if($validator->fails())
        {
            alert()->info('Data Duplicate', 'Email '.$request->email.' Sudah Ada');
            return back();
        }

        // $pemohon = Pemohon::where('id', $id)->first();
        $pemohon = Pemohon::findOrFail($id);
        // dd($pemohon->alamat);
        $new_photo = $request->file('profile');
        // dd($new_photo);

        if($new_photo){
            if($pemohon->profile && file_exists(storage_path('app/public/' . $pemohon->profile))){
                Storage::delete('public/'.$pemohon->profile);
            }

            $new_photo_path = $new_photo->store('pemohon/profile', 'public');

            $pemohon->profile = $new_photo_path;
        }

        $pemohon->nama = $request->nama;
        $pemohon->email = $request->email;
        $pemohon->alamat = $request->alamat;
        $pemohon->jk = $request->jk;
        $pemohon->no_hp = $request->no_hp;

        $pemohon->save();

        alert()->success('Update Data', 'Berhasil Update Biodata '.$request->nama);
        return back();
    }
}

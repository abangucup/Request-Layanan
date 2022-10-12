<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cctv;
use App\Models\User;
use Illuminate\Http\Request;

class CctvController extends Controller
{
    public function userindex()
    {
        $cctvs = Cctv::all();
        return view('user.cctv', compact(['cctvs']));
    }
    public function index()
    {
        $cctvs = Cctv::all();
        return view('admin.cctv.index', compact(['cctvs']));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'lokasi' => 'required',
            'ip' => 'required',
            'port' => 'required',
            'url' => 'required',
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'status' => 'required',
        ]);

        $cctv = new Cctv();
        $cctv->lokasi = $request->lokasi;
        $cctv->ip = $request->ip;
        $cctv->port = $request->port;
        $cctv->url = $request->url;
        $cctv->username = $request->username;
        $cctv->password = $request->password;
        $cctv->nama = $request->nama;
        $cctv->status = $request->status;

        $cctv->save();

        alert()->success('CCTV Ditambahkan','CCTV '.$request->nama.' Berhasil Ditambahkan');
        return back();
    }

    public function show($id)
    {
        $cctv = Cctv::where('id', $id)->first();
        // dd($cctvs);
        // $cctv = Cctv::findOrFail($id);
        // dd($cctv);
        return view('admin.cctv.show', compact(['cctv']));
    }

    public function edit(Request $request, $id)
    {

    }

    public function update(Request $request, Cctv $cctv)
    {
       
        $this->validate($request, [
            'lokasi' => 'required',
            'ip' => 'required',
            'port' => 'required',
            'url' => 'required',
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'status' => 'required',
        ]);
    
        //get data Blog by ID
        $cctv = Cctv::findOrFail($cctv->id);
    
            $cctv->update([
            'lokasi' => $request->lokasi,
            'ip' => $request->ip,
            'port' => $request->port,
            'url' => $request->url,
            'username' => $request->username,
            'password' => $request->password,
            'nama' => $request->nama,
            'status' => $request->status,
            ]);
    
        alert()->success('CCTV Diedit','CCTV '.$request->nama.' Berhasil Diedit');
        return back();
            
    }

    public function destroy(Cctv $cctv)
    {
        // $cctv = User::findOrFail($id);
        $cctv->delete();
        alert()->error('CCTV Dihapus', 'CCTV '.$cctv->nama. ' Berhasil Dihapus');
        return redirect()->route('cctv.index');
    }
}

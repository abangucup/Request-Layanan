<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Opd;
use Illuminate\Http\Request;

class OpdController extends Controller
{
    public function index()
    {
        $opds = Opd::all();
        return view('admin.opd.index', compact(['opds']));
    }
}

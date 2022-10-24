@extends('auth.layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container-fluid px-2 px-md-5">
    <div class="card card-body mx-3 mx-md-12 mt-7 mb-8">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{  asset('storage/'.$pemohon->profile) ?? ''}}" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ auth()->user()->pemohon->nama}}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        Sebagai <b>{{ $pemohon->bidang->jabatan ?? 'Kosong'}}</b> Di <b>{{
                            $pemohon->bidang->opd->nama ?? 'Kosong'}}</b>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Infomasi Akun</h6>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm">
                                Berisikan data akun anda, dimana akun ini sebagai informasi untuk login kedalam Website
                                Layanan Hosting
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">Username:</strong> &nbsp; {{$pemohon->user->username}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">Role:</strong> &nbsp; {{$pemohon->user->role}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Data Pribadi</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#editprofile-{{ $pemohon->id}}">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit Profile"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm">
                                Berisikan pribadi anda sebagai pemohon untuk bisa diberikan akses di Website Layanan
                                Hosting
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                    <strong class="text-dark">Nama:</strong> &nbsp; {{$pemohon->nama}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">Email:</strong> &nbsp; {{$pemohon->email}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">No HP / WA:</strong> &nbsp;
                                    {{$pemohon->no_hp}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">Jenis Kelamin:</strong> &nbsp;
                                    {{$pemohon->jk}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">Alamat:</strong> &nbsp;
                                    {{$pemohon->alamat}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">OPD:</strong> &nbsp;
                                    {{$pemohon->bidang->opd->nama}}
                                </li>
                            </ul>
                        </div>
                        {{-- Modal Edit Profile --}}
                        <div class="modal fade" id="editprofile-{{$pemohon->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('pemohon.update', $pemohon->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Edit
                                                Profile
                                                {{$pemohon->nama}}</h5>
                                            <button type="button" class="btn-close text-dark me-2"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <h2 style="line-height: 0">&times;</h2>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            {{-- ISI FORM --}}
                                            <div class="input-group input-group-static mb-4">
                                                <label>Photo Profile</label>
                                                <input type="file" name="profile" class="form-control"
                                                    required>
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama"
                                                    value="{{ $pemohon->nama}}" required>
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email"
                                                    value="{{ $pemohon->email}}" required>
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" name="alamat"
                                                    value="{{ $pemohon->alamat}}" required>
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label>Jenis Kelamin</label>
                                                <input type="text" class="form-control" name="jk"
                                                    value="{{ $pemohon->jk}}" required>
                                            </div>
                                            <div class="input-group input-group-static mb-4">
                                                <label>No HP / WA</label>
                                                <input type="text" class="form-control" name="no_hp"
                                                    value="{{ $pemohon->no_hp}}" required>
                                            </div>
                                            {{-- END ISI FORM --}}

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn bg-gradient-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn bg-gradient-primary">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- End Modal Edit Profile --}}
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Tanggapan Petugas</h6>
                        </div>
                        @foreach ($tanggapans as $tanggapan)
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                    <div class="avatar me-3">
                                        <img src="../assets/img/kal-visuals-square.jpg" alt="kal"
                                            class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Sophie B.</h6>
                                        <p class="mb-0 text-xs">Hi! I need more information..</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                        href="javascript:;">Reply</a>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="mb-5 ps-3">
                        <h6 class="mb-1">Permintaan</h6>
                        <p class="text-sm">List Data Permintaan Web Hosting</p>
                    </div>
                    <div class="row">
                        <?php $no = 1; ?>
                        @foreach ($permintaans as $permintaan)
                        @if ($permintaan->pemohon->id == auth()->user()->pemohon->id)

                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain shadow-xl">
                                <div class="card-header p-0 mt-n4 mx-3">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        {{-- <img src="https://bonebolangokab.go.id/assets/img/foto_bupati.png"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-xl"> --}}
                                    </a>
                                </div>
                                <div class="card-body p-3">
                                    <p class="mb-0 text-sm">Permintaan #{{ $no++}}</p>
                                    <a href="javascript:;">
                                        <h5>
                                            Domain : {{ $permintaan->domain}}
                                        </h5>
                                    </a>
                                    <span>Keterangan :</span>
                                    <p class="mb-4 text-sm">
                                        {{ $permintaan->keterangan}}
                                    </p>
                                    <span>Status : <button class="btn btn-danger btn-sm mt-3">{{
                                            $permintaan->status}}</button></span>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
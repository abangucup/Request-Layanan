@extends('auth.layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container-fluid px-2 px-md-5">
    <div class="card card-body mx-3 mx-md-12 mt-7 mb-8">
        <div class="row gx-4 mb-2">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{ auth()->user()->pemohon->profile ?? ''}}" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ auth()->user()->pemohon->nama}}
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        Sebagai <b>{{ auth()->user()->pemohon->bidang->jabatan ?? 'Kosong'}}</b> Di <b>{{
                            auth()->user()->pemohon->bidang->opd->nama ?? 'Kosong'}}</b>
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
                                    <strong class="text-dark">Username:</strong> &nbsp; {{auth()->user()->username}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">Role:</strong> &nbsp; {{auth()->user()->role}}
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
                                    <a href="javascript:;">
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
                                    <strong class="text-dark">Nama:</strong> &nbsp; {{auth()->user()->pemohon->nama}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">Email:</strong> &nbsp; {{auth()->user()->pemohon->email}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">No HP / WA:</strong> &nbsp; {{auth()->user()->pemohon->no_hp}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">Jenis Kelamin:</strong> &nbsp; {{auth()->user()->pemohon->jk}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">Alamat:</strong> &nbsp; {{auth()->user()->pemohon->alamat}}
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm">
                                    <strong class="text-dark">OPD:</strong> &nbsp; {{auth()->user()->pemohon->bidang->opd->nama}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Admin Layanan Web Hosting</h6>
                        </div>
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
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <img src="../assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Anne Marie</h6>
                                        <p class="mb-0 text-xs">Awesome work, can you..</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                        href="javascript:;">Reply</a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <img src="../assets/img/ivana-square.jpg" alt="kal"
                                            class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Ivanna</h6>
                                        <p class="mb-0 text-xs">About files I can..</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                        href="javascript:;">Reply</a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <img src="../assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Peterson</h6>
                                        <p class="mb-0 text-xs">Have a great afternoon..</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                        href="javascript:;">Reply</a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0">
                                    <div class="avatar me-3">
                                        <img src="../assets/img/team-3.jpg" alt="kal" class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Nick Daniel</h6>
                                        <p class="mb-0 text-xs">Hi! I need more information..</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                        href="javascript:;">Reply</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="mb-5 ps-3">
                        <h6 class="mb-1">Permintaan</h6>
                        <p class="text-sm">List Data Permintaan Web Hosting</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="card-header p-0 mt-n4 mx-3">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="https://bonebolangokab.go.id/assets/img/foto_bupati.png"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body p-3">
                                    <p class="mb-0 text-sm">Project #4</p>
                                    <a href="javascript:;">
                                        <h5>
                                            Gothic
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        Why would anyone pick blue over pink? Pink is obviously a better color.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@extends('admin.layouts.app')

@section('title', 'Detail CCTV')

@section('header')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Halaman</li>
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('cctv.index')}}">CCTV</a></li>
</ol>
<h6 class="font-weight-bolder mb-0">CCTV {{$cctv->lokasi}}</h6>
@endsection

@section('content')


<div class="col-lg-6 col-md-6 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>DETAIL CCTV</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="dropdown float-lg-end pe-4">
                        <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-secondary"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                            <li><a class="btn btn-info" href="{{ route('cctv.index')}}"><i
                                        class="fa fa-video-camera me-sm-1"></i>
                                    <span class="d-sm-inline d-none pe-4">List CCTV</span></a></li>
                            <li>
                                <form action="{{ route('cctv.destroy', $cctv->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-primary">
                                        <i class="fa fa-trash me-sm-1"></i>
                                        <span class="d-sm-inline d-none pe-5">Hapus</span>
                                    </button>
                                </form>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="p-4">
                <div class="input-group input-group-static mb-4">
                    <label>Lokasi CCTV</label>
                    <input type="text" class="form-control" value="{{ $cctv->lokasi}}" disabled>
                </div>
                <div class="input-group input-group-static mb-4">
                    <label>Akses IP</label>
                    <input type="text" class="form-control" value="{{ $cctv->ip}}" disabled>
                </div>
                <div class="input-group input-group-static mb-4">
                    <label>Port CCTV</label>
                    <input type="text" class="form-control" value="{{ $cctv->port}}" disabled>
                </div>
                <div class="input-group input-group-static mb-4">
                    <label>Akses URL</label>
                    <input type="text" class="form-control" value="{{ $cctv->url}}" disabled>
                </div>
                <div class="input-group input-group-static mb-4">
                    <label>Nama CCTV</label>
                    <input type="text" class="form-control" value="{{ $cctv->nama}}" disabled>
                </div>
                <div class="input-group input-group-static mb-4">
                    <label>Username</label>
                    <input type="text" class="form-control" value="{{ $cctv->username}}" disabled>
                </div>
                <div class="input-group input-group-static mb-4">
                    <label>Password</label>
                    <input type="text" class="form-control" value="{{ $cctv->password}}" disabled>
                </div>
                <div class="input-group input-group-static mb-4">
                    <label>Status</label>
                    <input type="text" class="form-control" value="{{ $cctv->status}}" disabled>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
@extends('auth.layouts.app')

@section('title', 'Daftar')

@section('content')
<div class="container my-auto">
    <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Daftar Akun</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="text-start" action="{{ route('register')}}" method="POST">
                        @csrf
                        {{-- <div class="input-group input-group-static mb-4">
                            <label>Photo Profile</label>
                            <input type="file" name="profile" class="form-control"
                                required>
                        </div> --}}
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Nomor HP / WA</label>
                            <input type="text" name="no_hp" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jk" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
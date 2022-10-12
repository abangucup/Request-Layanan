@extends('admin.layouts.app')

@section('title', 'CCTV')

@section('header')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Halaman</a></li>
  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">CCTV</li>
</ol>
<h6 class="font-weight-bolder mb-0">List CCTV</h6>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-1">
          <h6 class="text-end pe-4 text-white text-capitalize ps-3"><button class="btn bg-gradient-info btn-block"
              data-bs-toggle="modal" data-bs-target="#tambahcctv">TAMBAH CCTV</button>
          </h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-center text-uppercase text-secondary font-weight-bolder">Lokasi</th>
                <th class="text-center text-uppercase text-secondary font-weight-bolder">Nama</th>
                <th class="text-center text-uppercase text-secondary font-weight-bolder">Url</th>
                <th class="text-center text-uppercase text-secondary font-weight-bolder">Status</th>
                <th class="text-center text-uppercase text-secondary font-weight-bolder">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cctvs as $cctv)
              <tr>
                <td>
                  <p class="text-center text-xs font-weight-bold mb-0">{{ $cctv->lokasi}}</p>
                </td>
                <td>
                  <p class="text-center text-xs font-weight-bold mb-0">{{ $cctv->nama}}</p>
                </td>
                <td>
                  <p class="text-center text-xs font-weight-bold mb-0"><a href="{{ $cctv->url}}" target="_blank">{{
                      $cctv->url}}</a></p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span
                    class="badge badge-sm {{ $cctv->status == 'active' ? 'bg-gradient-success' : 'bg-gradient-secondary' }}">{{
                    $cctv->status}}</span>
                </td>
                <td class="align-middle text-center">
                  <button class="btn btn-link text-secondary mb-0 dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="material-icons">more_vert</span>
                  </button>
                  <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                    <li class="nav-item d-flex align-items-center">
                      <a href="{{ route('cctv.show', $cctv->id)}}" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-eye me-sm-1"></i>
                        <span class="d-sm-inline d-none">Lihat</span>
                      </a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                      <a href="" data-bs-toggle="modal" data-bs-target="#editcctv-{{ $cctv->id}}"
                        class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-pencil-square-o me-sm-1"></i>
                        <span class="d-sm-inline d-none">Edit</span>
                      </a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                      <form action="{{ route('cctv.destroy', $cctv->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item nav-link text-body font-weight-bold px-0">
                          <i class="fa fa-trash me-sm-1"></i>
                          <span class="d-sm-inline d-none">Hapus</span>
                        </button>
                      </form>
                    </li>
                  </ul>
                </td>
              </tr>
              {{-- Modal Edit CCTV --}}
              <div class="modal fade" id="editcctv-{{$cctv->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <form action="{{ route('cctv.update', $cctv->id)}}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Edit CCTV {{$cctv->lokasi}}</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        {{-- ISI FORM --}}
                          <div class="input-group input-group-static mb-4">
                              <label>Lokasi CCTV</label>
                              <input type="text" class="form-control" name="lokasi" value="{{ $cctv->lokasi}}" required>
                          </div>
                          <div class="input-group input-group-static mb-4">
                              <label>Akses IP</label>
                              <input type="text" class="form-control" name="ip" value="{{ $cctv->ip}}" required>
                          </div>
                          <div class="input-group input-group-static mb-4">
                              <label>Port CCTV</label>
                              <input type="text" class="form-control" name="port" value="{{ $cctv->port}}" required>
                          </div>
                          <div class="input-group input-group-static mb-4">
                              <label>Akses URL</label>
                              <input type="text" class="form-control" name="url" value="{{ $cctv->url}}" required>
                          </div>
                          <div class="input-group input-group-static mb-4">
                              <label>Nama CCTV</label>
                              <input type="text" class="form-control" name="nama" value="{{ $cctv->nama}}" required>
                          </div>
                          <div class="input-group input-group-static mb-4">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="{{ $cctv->username}}" required>
                          </div>
                          <div class="input-group input-group-static mb-4">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" value="{{ $cctv->password}}" required>
                          </div>
                          <div class="input-group input-group-static mb-4">
                              <label>Status</label>
                              <input type="text" class="form-control" name="status" value="{{ $cctv->status}}" required>
                          </div>
          
                        {{-- END ISI FORM --}}

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-primary">Edit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              {{-- End Modal Edit CCTV --}}
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



{{-- Modal Tambah CCTV --}}
<div class="modal fade" id="tambahcctv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="{{ route('cctv.store')}}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Data CCTV</h5>
          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          {{-- ISI FORM --}}
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">IP</label>
            <input type="text" class="form-control" name="ip" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Port</label>
            <input type="text" class="form-control" name="port" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Url</label>
            <input type="url" class="form-control" name="url" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="password" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <select class="form-control" name="status">
              <option value="active">Active</option>
              <option value="nonactive">Non Active</option>
            </select>
          </div>
          {{-- END ISI FORM --}}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn bg-gradient-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal <Tamb></Tamb>ah CCTV --}}

@endsection
@extends('admin.layouts.app')

@section('title', 'CCTV')

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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lokasi</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">IP</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Url</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- @foreach ($cctvs as $cctv) --}}
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">

                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                  <p class="text-xs text-secondary mb-0">Organization</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm bg-gradient-success">Online</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                </td>
                <td class="align-middle">
                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                    data-original-title="Edit user">
                    Edit
                  </a>
                </td>
              </tr>
              {{-- @endforeach --}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



{{-- Modal Tambah CCTV --}}
<!-- Button trigger modal -->
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
            <label class="form-label">Nama</label>
              <input type="email" class="form-control" name="nama" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Url</label>
            <input type="url" class="form-control" name="url" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Username</label>
            <input type="tel" class="form-control" name="username" required>
          </div>
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          {{-- END ISI FORM --}}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn bg-gradient-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


{{-- End Modal Tambah CCTV --}}
@endsection
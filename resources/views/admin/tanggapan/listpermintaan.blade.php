@extends('admin.layouts.app')

@section('title', 'Permintaan')

@section('header')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Halaman</a></li>
  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Permintaan</li>
</ol>
<h6 class="font-weight-bolder mb-0">List Permintaan</h6>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary font-weight-bolder">No</th>
                <th class="text-uppercase text-secondary font-weight-bolder">Domain</th>
                {{-- <th class="text-uppercase text-secondary font-weight-bolder">Pemohon</th>
                <th class="text-uppercase text-secondary font-weight-bolder">OPD</th> --}}
                <th class="text-uppercase text-secondary font-weight-bolder">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($permintaans as $permintaan)
              <tr>
                <td>
                  <p class="ps-3 text-xs font-weight-bold mb-0">{{ $loop->iteration}}</p>
                </td>
                <td>
                  <p class="ps-3 text-xs font-weight-bold mb-0">{{ $permintaan->}}</p>
                </td>
                {{-- <td>
                  <p class="ps-3 text-xs font-weight-bold mb-0">{{ $user->nama}}</p>
                </td>


                <td>
                  <p class="ps-3 text-xs font-weight-bold mb-0">{{ $user->opd->nama ?? ''}}</p>
                </td> --}}

                <td class="align-middle ps-4 ">
                  <button class="btn btn-link text-secondary mb-0 dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="material-icons">more_vert</span>
                  </button>
                  <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                    <li class="nav-item d-flex align-items-center">
                      <a href="#" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-eye me-sm-1"></i>
                        <span class="d-sm-inline d-none">Lihat</span>
                      </a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                      <a href="" data-bs-toggle="modal" data-bs-target="#editcctv-"
                        class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-pencil-square-o me-sm-1"></i>
                        <span class="d-sm-inline d-none">Edit</span>
                      </a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                      <form action="#" method="POST">
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
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
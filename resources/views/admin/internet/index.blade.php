@extends('admin.layouts.app')

@section('title', 'Internet Publik')

@section('header')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Halaman</a></li>
  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Internet Kantor</li>
</ol>
<h6 class="font-weight-bolder mb-0">List Internet Kantor</h6>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 tab-content">
        <div class="nav bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-1">
          <h6 class="nav pe-4 text-white text-capitalize ps-3">
            <a class="btn btn-secondary me-3" data-bs-toggle="tab" href="#interface" role="tab"
              aria-controls="interface" aria-selected="true">Interface</a>
            <a class="btn btn-secondary me-3" data-bs-toggle="tab" href="#iproutes" role="tab"
              aria-controls="ip routes" aria-selected="false">IP Route</a>
          </h6>

        </div>
      </div>

      <div class="card-body pb-2">
        <div class="table-responsive p-0">
          <div class="tab-content">

            {{-- Table Interface --}}
            <table class="tab-pane fade show active table align-items-center mb-0" id="interface" role="tabpanel">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary font-weight-bolder">No</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Nama Interface</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Type</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Mac Address</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Aktif</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Internet</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Packets</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($interfaces as $interface)

                <tr>

                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $loop->iteration}}</p>
                  </td>
                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $interface['name']}}</p>
                  </td>
                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $interface['type']}}</p>
                  </td>
                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $interface['mac-address'] ?? ''}}</p>
                  </td>
                  <td class="align-middle ps-4 text-sm">
                    <span
                      class="badge badge-sm {{ $interface['disabled'] == 'false' ? 'bg-gradient-success' : 'bg-gradient-secondary' }}">{{
                      $interface['disabled'] == 'false' ? 'Yes' : 'NO'}}</span>
                  </td>
                  <td class="align-middle ps-4 text-sm">
                    <span
                      class="badge badge-sm {{ $interface['rx-byte'] != 0 ? 'bg-gradient-success' : 'bg-gradient-secondary' }}">{{
                      $interface['rx-byte'] != 0 ? 'Yes' : 'NO'}}</span>
                  </td>

                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $interface['rx-byte']}}</p>
                  </td>
                  <td class="align-middle ps-4 ">
                    <button class="btn btn-link text-secondary mb-0 dropdown" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <span class="material-icons">more_vert</span>
                    </button>
                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                      <li class="nav-item d-flex align-items-center">
                        <a href="" class="nav-link text-body font-weight-bold px-0">
                          <i class="fa fa-eye me-sm-1"></i>
                          <span class="d-sm-inline d-none">Lihat</span>
                        </a>
                      </li>
                      <li class="nav-item d-flex align-items-center">
                        <a href="" data-bs-toggle="modal" data-bs-target=""
                          class="nav-link text-body font-weight-bold px-0">
                          <i class="fa fa-pencil-square-o me-sm-1"></i>
                          <span class="d-sm-inline d-none">Edit</span>
                        </a>
                      </li>
                      <li class="nav-item d-flex align-items-center">
                        <form action="" method="POST">
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
            {{-- End Table Interface --}}

            {{-- Table IP ROute --}}
            <table class="tab-pane fade table align-items-center mb-0" id="iproutes" role="tabpanel">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary font-weight-bolder">No</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Dst Address</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Gateway</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Routing Mark</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Status</th>
                  <th class="text-uppercase text-secondary font-weight-bolder">Comment</th>
                  <th class="text-uppercase text-secondary font-weight-bolder text-end">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($iproutes as $route)

                <tr>

                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $loop->iteration}}</p>
                  </td>
                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $route['dst-address']}}</p>
                  </td>
                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $route['gateway']}}</p>
                  </td>
                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $route['routing-mark'] ?? ''}}</p>
                  </td>
                  <td class="align-middle ps-4 text-sm">
                    <span
                      class="badge badge-sm {{ $route['active'] == 'true' ? 'bg-gradient-success' : 'bg-gradient-secondary' }}">{{
                      $route['active'] == 'true' ? 'Aktif' : 'Tidak Aktif'}}</span>
                  </td>

                  <td>
                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $route['comment'] ?? ''}}</p>
                  </td>
                  <td class="align-middle ps-4 ">
                    <button class="btn btn-link text-secondary mb-0 dropdown" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <span class="material-icons">more_vert</span>
                    </button>
                    <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                      <li class="nav-item d-flex align-items-center">
                        <a href="" class="nav-link text-body font-weight-bold px-0">
                          <i class="fa fa-eye me-sm-1"></i>
                          <span class="d-sm-inline d-none">Lihat</span>
                        </a>
                      </li>
                      <li class="nav-item d-flex align-items-center">
                        <a href="" data-bs-toggle="modal" data-bs-target=""
                          class="nav-link text-body font-weight-bold px-0">
                          <i class="fa fa-pencil-square-o me-sm-1"></i>
                          <span class="d-sm-inline d-none">Edit</span>
                        </a>
                      </li>
                      <li class="nav-item d-flex align-items-center">
                        <form action="" method="POST">
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
            {{-- End Table IP Route --}}

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
<aside
  class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
      target="_blank">
      <img src="{{ asset('assets/home/img/logo-kominfo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Kominfo</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white {{ request()->is('dashboard') ? 'active bg-gradient-info': ''}}"
          href="{{ route('dashboard')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ request()->is('dashboard/tanggapan') ? 'active bg-gradient-info': '' }}"
          href="{{ route('tanggapan.index')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">forum</i>
          </div>
          <span class="nav-link-text ms-1">Tanggapan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ request()->is('dashboard/opd') ? 'active bg-gradient-info': '' }}"
          href="{{ route('opd.index')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">corporate_fare</i>
          </div>
          <span class="nav-link-text ms-1">OPD</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ request()->is('dashboard/cctv') ? 'active bg-gradient-info': '' }}"
          href="{{ route('cctv.index')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">camera_outdoor</i>
          </div>
          <span class="nav-link-text ms-1">CCTV</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ request()->is('dashboard/internet') ? 'active bg-gradient-info': '' }}"
          href="{{ route('internet.index')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">router</i>
          </div>
          <span class="nav-link-text ms-1">Internet Publik</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white {{ request()->is('dashboard/user') ? 'active bg-gradient-innfo': '' }}"
          href="{{ route('user.index')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">people</i>
          </div>
          <span class="nav-link-text ms-1">User</span>
        </a>
      </li>
      <li class="nav-item">

        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="nav-link ative btn bg-gradient-danger" type="submit">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text pe-7">Keluar</span>
          </button>
        </form>
      </li>
    </ul>
  </div>
</aside>
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav
                class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid ps-2 pe-0">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('home')}}">
                        Sistem Informasi Pelayanan (SIP)
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        @auth
                        <ul class="navbar-nav mx-auto">
                        </ul>
                        <ul class="navbar-nav d-lg-block">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                    href="{{ route('home')}}">
                                    <i class="fa fa-user-circle opacity-6 text-dark me-1"></i>
                                    {{ auth()->user()->pemohon->nama}}
                                </a>
                            </li>
                          </ul>
                        @endauth
                        @guest
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                    href="{{ route('home')}}">
                                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                    Home
                                </a>
                            </li>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-block">
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('register')}}">
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                    Daftar
                                </a>
                            </li>

                        </ul>
                        <ul class="navbar-nav d-lg-block">
                            <li class="nav-item">
                                <a class="nav-link me-2" href="{{ route('login')}}">
                                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                    Masuk
                                </a>
                            </li>
                        </ul>
                        @endguest
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>
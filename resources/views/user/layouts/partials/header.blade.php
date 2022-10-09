<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/home/img/logo-bonbol.png') }}" alt="">
      <h1>KOMINFO</h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : ''}}">Home</a></li>
        <li><a href="{{ route('contact.index') }}" class="{{ request()->is('/contact') ? 'active' : ''}}">Kontak</a></li>
        <li><a href="{{ route('permintaan.index') }}" class="{{ request()->is('/permintaan') ? 'active' : ''}}">Permintaan</a></li>
        <li><a href="{{ route('cctv') }}" class="{{ request()->is('/cctv') ? 'active' : ''}}">CCTV</a></li>
        <li><a href="{{ route('internet.index') }}" class="{{ request()->is('/internet') ? 'active' : ''}}">Internet Publik</a></li>
        <li><a href="" class="get-a-quote">Login</a></li>
      </ul>
      
    </nav><!-- .navbar -->
    
  </div>
  
</header><!-- End Header -->
<!-- End Header -->
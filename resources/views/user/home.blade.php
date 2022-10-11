@extends('user.layouts.app')

@section('title', 'Home')

@section('content')

@include('user.layouts.partials.hero')

<!-- Main -->
<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 service-item d-flex" data-aos="fade-up">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-database"></i></div>
          <div>
            <h4 class="title">Web Hosting</h4>
            <p class="description">Menyediakan tempat hosting aplikasi setiap OPD yang melakuan permintaan kepada
              KOMINFO</p>
            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-3 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-globe"></i></div>
          <div>
            <h4 class="title">Subdomain</h4>
            <p class="description">Selain dapat menghosting aplikasi, OPD akan diberikan SUBDOMAIN</p>
            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-3 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-shield"></i></div>
          <div>
            <h4 class="title">Tersertifikasi SSL</h4>
            <p class="description">Domain atau Website yang terlindungi dengan sertifikasi SSL</p>
            <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i
                class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-3 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="fa-solid fa-user"></i></div>
          <div>
            <h4 class="title">Manajemen Mudah</h4>
            <p class="description">OPD dapat memanajemen hosting mereka sendiri dengan mudah, dimana pun dan kapanpun
            </p>
            <a href="" class="readmore stretched-link"><span>Learn
                More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- End Featured Services Section -->


  {{-- CCTV --}}
  {{-- <div><iframe width="640" height="480" src="https://rtsp.me/embed/Bea6ezFk/" frameborder="0"
      allowfullscreen></iframe>
    <p align="right">powered by <a href="https://rtsp.me" title="RTSP.ME - Free website RTSP video steaming service"
        target="_blank">rtsp.me</a></p>
  </div> --}}


</main>
<!-- End #main -->


@endsection
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Layanan Web Hosting Kominfo Bonebolango</h2>
          <p data-aos="fade-up" data-aos-delay="100">Dalam upaya penigkatan sumber daya yang ada, KOMINFO MENYEDIAKAN
            LAYANAN WEB HOSTING
            kepada seluruh OPD Wilayah Kabupaten Bonebolango.
          </p>
  
          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="WEBSITE ANDA">
            <button type="submit" class="btn btn-primary">CARI</button>
          </form>
  
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
  
            <div class="col-lg-2 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $opd}}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p class="text-white">OPD</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-2 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $website}}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p class="text-white">Website</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-2 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $user}}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p class="text-white">Pengguna</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-2 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $permintaan}}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p class="text-white">Permintaan</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-2 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $cctv}}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <a href="{{route('cctv')}}" class="text-white">
                  <p>CCTV</p>
                </a>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-2 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{ $internet}}" data-purecounter-duration="1"
                  class="purecounter"></span>
                <a href="{{route('permintaan')}}" class="text-white">
                  <p>Internet Publik</p>
                </a>
              </div>
            </div><!-- End Stats Item -->
  
          </div>
        </div>
  
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="{{ asset('assets/home/img/foto_bupati.png') }}" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>
  
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
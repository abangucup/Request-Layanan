@extends('user.layouts.app')

@section('title', 'CCTV PUBLIK')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>CCTV Publik</h2>
                        <p>Kominfo Memberikan Akses Kepada Seluruh Masyarakat Untuk Melihat Maupun Mengakses Seluruh
                            CCTV PUBLIK
                            Yang Telah Disediakan Oleh Kominfo. Kominfo Juga Memberikan Layanan Kepada Seluruh OPD Yang
                            Ingin Melakukan
                            Pemasangan CCTV.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>CCTV</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                {{-- cctv di kominfo 2 || komunikasi --}}
                <div class="col-lg-4">
                    <iframe src="https://rtsp.me/embed/Bea6ezFk/" frameborder="0" allowfullscreen></iframe>
                </div>

                {{-- cctv di capil --}}
                <div class="col-lg-4">
                    <iframe src="https://rtsp.me/embed/D8sbGS9k/" frameborder="0" allowfullscreen></iframe>
                </div>

                {{-- cctv di depan kominfo informatika --}}
                <div class="col-lg-4">
                    <iframe src="https://rtsp.me/embed/QzFdkBa5/" frameborder="0" allowfullscreen></iframe>
                </div>

                {{-- unknown --}}
                <div class="col-lg-4">
                    <iframe src="https://rtsp.me/embed/Bea6ezFk/" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->
@endsection
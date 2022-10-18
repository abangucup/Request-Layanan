@extends('user.layouts.app')

@section('title', 'CCTV')

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
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li>CCTV</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= CCTV Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                @foreach ($cctvs as $cctv)
                @if ($cctv->status == 'active')

                <div class="col-lg-4">
                    <iframe src="{{ $cctv->url}}" frameborder="0" width="340" allowfullscreen></iframe>
                    <p class="text-center">{{ $cctv->lokasi}}</p>
                </div>
                @endif
                @endforeach
            </div>

        </div>
    </section><!-- End cctv Section -->

</main><!-- End #main -->
@endsection
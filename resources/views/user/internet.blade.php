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
                            <h2>Internet Publik</h2>
                            <p>Kominfo telah memberikan Layanan Internet Publik yang telah disebarlukan diseluruh tempat yang ada
                                di Kabupaten Bonebolango. Adapun titik lokasi setiap Internet tersebut dapat anda liat disini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li>Internet Publik</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

    <!-- ======= Internet Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                {{-- cctv di kominfo 2 || komunikasi --}}
                Titik
            </div>

        </div>
    </section><!-- End Internet Section -->

</main><!-- End #main -->
@endsection
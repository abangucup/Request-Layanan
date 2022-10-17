@extends('user.layouts.app')

@section('title', 'KONTAK')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Kontak</h2>
                        <p>Merupakan Data TIM Dari Pengembang Serta Pengelola Sistem Ini</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li>Kontak</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>TIM</h2>

            </div>

            <div class="row gy-4">

                @foreach ($contacts as $contact)

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ $contact->profile ?? ''}}" alt="{{ $contact->nama}}" class="img-fluid">
                        </div>
                        <h3><a href="service-details.html" class="stretched-link">{{ $contact->nama}}</a></h3>
                        <p>No HP : {{ $contact->no_hp}}</p>
                        <p>Email : {{ $contact->email}}</p>
                        <p>Jabatan : {{ $contact->jabatan ?? ''}}</p>
                    </div>
                </div><!-- End Card Item -->

                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->

@endsection
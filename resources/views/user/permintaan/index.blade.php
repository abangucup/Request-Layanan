@extends('user.layouts.app')

@section('title', 'Permintaaan')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Layanan Web Hosting</h2>
                        <p>Dalam Pemanfaatan Sumber Daya Yang Ada, Kominfo Memberikan Layanan Berupa Web Hosting Kepada
                            Seluruh
                            OPD Kabupaten Bonebolango Guna Meningkatkan Pelayanan Serta Monitoring Terpusat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Permintaan</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Permintaan Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 mt-4 align-items-center justify-content-center">
                <div class="col-lg-8">
                    @if (session('status'))
                    <div class="text-danger mb-2">{{ session('status')}}
                    </div>
                    @endif
                    <form action="{{ route('permintaan.store')}}" method="POST" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="domain" class="form-control" placeholder="Nama Domain"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="program"
                                    placeholder="Framework(Laravel/Native/Dsb)" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="userhost" placeholder="Username CPANEL" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="passhost" placeholder="Password CPANEL" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="keterangan" rows="5"
                                placeholder="Alasan Kebutuhan Permintaan Hosting" required></textarea>
                        </div>
                            
                            
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3">Kirim Permintaan</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->


</main><!-- End #main -->
@endsection
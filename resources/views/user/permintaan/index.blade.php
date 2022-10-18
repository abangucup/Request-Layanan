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
            <div class="col-lg-8">
                <form action="{{ route('permintaan.store')}}" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <input type="text" name="domain" class="form-control" placeholder="Nama Domain Yang Akan Digunakan"
                                required>
                                
                        </div>
                        <div class="col-md-2 form-group">
                            <input type="text" name="domain" class="form-control ms-0" placeholder="Nama Domain Yang Akan Digunakan"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="program" id="" placeholder="Bahasa Pemrograman / Framwork"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3">
                            <input type="text" class="form-control" name="user" placeholder="Username Untuk Login Ke Panel"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3">
                            <input type="text" class="form-control" name="pass" placeholder="Password Untuk Login Ke Panel"
                                required>
                        </div>
                    </div>
                    
                    <div class="form-group mt-3">
                        <label for="">OK</label>
                        <textarea class="form-control" name="keterangan" rows="5" placeholder="Alasan Kebutuhan Melakukan Permintaan Hosting"
                            required></textarea>
                    </div>
                    <button class="mt-3 text-center btn btn-primary" type="submit">Kirim</button>
                </form>
            </div><!-- End Contact Form -->

        </div>
    </section><!-- End Contact Section -->


</main><!-- End #main -->
@endsection
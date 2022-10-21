@extends('user.layouts.app')

@section('title', 'Bidang')

@section('content')
<div class="breadcrumbs">
    <div class="page-header pt-4">
    </div>
</div>
<!-- End Breadcrumbs -->

<section id="get-a-quote" class="get-a-quote  bg-secondary">
    <div class="container" data-aos="fade-up">

        <div class="row g-0 align-items-center justify-content-center mt-5">

            <div class="col-lg-7">
                @if (session('status'))
                <div class="text-danger mb-2">{{ session('status')}}
                </div>
                @endif
                <form action="{{ route('bidang.store')}}" method="POST">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-lg-12">
                            <h4>
                                <Basefont>Data Bidang</Basefont>
                            </h4>
                        </div>

                        
                        <div class="col-md-12">
                            <select class="custom-select form-control" name="opd_id">
                                <option selected>Opd</option>
                                @foreach ($opds as $opd)
                                <option value="{{ $opd->id}}">{{ $opd->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="bidang" class="form-control" placeholder="Nama Bidang" required>
                        </div>

                        <div class="col-md-12 ">
                            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Anda" required>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Quote Form -->

        </div>

    </div>
</section><!-- End Get a Quote Section -->
@endsection
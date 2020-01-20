@extends('welcome')

@section('konten')
<div class="position-relative">
    <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-250">
    <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="container py-lg-md d-flex">
        <div class="col px-0">
        <div class="row">
            <div class="col-lg-6">
            <h1 class="display-3  text-white">DIGIBOOK 4.0<span>Persatuan Sekolah Menengah Kesehatan Seluruh Indonesia</span></h1>
            <p class="lead  text-white">Media Pembelajaran Buku Digital yang dikembangkan dari dan untuk Sekolah di bawah Persatuan Persatuan Sekolah Menengah Kesehatan Seluruh Indonesia </p>
            <!-- <div class="btn-wrapper">
                <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-info btn-icon mb-3 mb-sm-0">
                <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                <span class="btn-inner--text">Components</span>
                </a>
                <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-white btn-icon mb-3 mb-sm-0">
                <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                <span class="btn-inner--text">Download HTML</span>
                </a>
            </div> -->
            </div>
        </div>
        </div>
    </div>
    <!-- SVG separator -->
    <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    </section>
    <!-- 1st Hero Variation -->
</div>
<section class="section section-lg pt-lg-0 mt--200">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
        <div class="row row-grid">
            @foreach($buku as $data)
            <div style="margin-bottom:20px" class="col-lg-4">
            <div class="card card-lift--hover shadow border-0">
                <div class="card-body py-5">
                
                <h6 class="text-primary text-uppercase">{{$data->nama}}</h6><br>
                <div>
                    <img src="{{ asset('images/'.$data->cover) }}" class="card-img-top" alt="image">
                </div>
                <a href="{{ route('landing.show', $data->id)}}" class="btn btn-primary mt-4">Masuk</a>
                </div>
            </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    <br><br>
    </div>
</section>
@endsection
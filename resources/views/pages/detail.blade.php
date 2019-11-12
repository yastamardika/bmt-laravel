@extends('layouts.front')
@section('konten')

@foreach ($artist as $p)
<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">{{ $p->nama_artist }}</h1>
        <p class="mb-4 pb-0">Find the best art perfomance for you</p>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        <a href="#speakers" class="about-btn scrollto">Discover More</a>
    </div>
</section>
<section id="speakers" class="wow fadeInUp" style="background-color:black">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6">
                {{ $p->deskripsi }}
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        Nama
                    </div>
                    <div class="col-lg-1 col-md-1">
                        :
                    </div>
                    <div class="col-lg-6 col-md-6"> {{ $p->nama_artist }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        Owner
                    </div>
                    <div class="col-lg-1 col-md-1">
                        :
                    </div>
                    <div class="col-lg-6 col-md-6"> {{ $p->nama_owner }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        Nomor Telepon
                    </div>
                    <div class="col-lg-1 col-md-1">
                        :
                    </div>
                    <div class="col-lg-6 col-md-6"> {{ $p->nomor_telepon }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        Alamat
                    </div>
                    <div class="col-lg-1 col-md-1">
                        :
                    </div>
                    <div class="col-lg-6 col-md-6"> {{ $p->alamat }}
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
@endforeach
@endsection
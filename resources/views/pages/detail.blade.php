@extends('layouts.front')
@section('konten')

@foreach ($artist as $p)
<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">{{ $p->nama_artist }}</h1>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
            data-autoplay="true"></a>
        <a href="#speakers" class="about-btn scrollto">Discover More</a>
    </div>
</section>
<section id="speakers" class="wow fadeInUp" style="background-color:black">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <p>{{ $p->deskripsi }}</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <p> Nama</p>
                    </div>
                    <div class="col-lg-1 col-md-1">
                        <p>:</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p>{{ $p->nama_artist }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <p>Owner</p>
                    </div>
                    <div class="col-lg-1 col-md-1">
                        <p>:</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p>{{ $p->nama_owner }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <p>Nomor Telepon</p>
                    </div>
                    <div class="col-lg-1 col-md-1">
                        <p> :</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p>{{ $p->nomor_telepon }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <p>Alamat</p>
                    </div>
                    <div class="col-lg-1 col-md-1">
                        <p>:</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p>{{ $p->alamat }}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <h1 class="mb-4 pb-0" style="text-align:center" >For More Information and Booking</h1>
    <div class="footer-top"  style=" background: rgba(6, 12, 34, 0.9);">
        <div class="container">
            <div class="row" >

                <div class="col-lg-3 col-md-6 " style="padding: 5% ">
                    <a href="/"><img src="https://image.flaticon.com/icons/svg/174/174883.svg" alt="TheEvenet"
                            style="width:100%;height:100%"></a>
                </div>
                <div class="col-lg-3 col-md-6 "style="padding: 5% ">
                    <a href="/"><img src="https://image.flaticon.com/icons/svg/733/733585.svg" alt="TheEvenet"
                            style="width:100%;height:100%"></a>
                </div>
                <div class="col-lg-3 col-md-6 "style="padding: 5% ">
                    <a href="/"><img src="https://image.flaticon.com/icons/svg/174/174855.svg" alt="TheEvenet"
                            style="width:100%;height:100%"></a>
                </div>
                <div class="col-lg-3 col-md-6 "style="padding: 5% ">
                    <a href="/"><img src="https://image.flaticon.com/icons/svg/174/174848.svg" alt="TheEvenet"
                            style="width:100%;height:100%"></a>
                </div>

            </div>
        </div>
    </div>
</section>
@endforeach
@endsection

@extends('layouts.front')
@section('konten')

@foreach ($artist as $p)
<section id="intro" style="background-image: url('{{ url('/data_file/'.$p->foto) }}') ; background-size:cover !important">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0" style="text-shadow: 1px 1px 2px black;">{{ $p->nama_artist }}</h1>
        <a href="https://www.youtube.com/watch?v=Su_Z95pScc8" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        <a href="#speakers" class="about-btn scrollto">Discover More</a>
    </div>
    <a href="/category/list/detail/{{ $p->id-1 }}">
        <div style="padding:40px; background: rgba(30, 30, 30, 0.53);border-radius: 3px;  position: absolute;bottom: 0;left:0">
            <h6><b>Previous Artist</b></h6>
            <h6 style="color:#FFFFFF"><b>Click to see previous artist available</b></h6>
        </div>
    </a>
    <a href="/category/list/detail/{{ $p->id+1 }}">
        <div style="padding:40px; background: rgba(30, 30, 30, 0.53);border-radius: 3px;  position: absolute;bottom: 0;right: 0;">
            <h6><b>Next Artist</b></h6>
            <h6 style="color:#FFFFFF"><b>Click to see next artist available</b></h6>
        </div>
    </a>
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
    <h1 class="mb-4 pb-0" style="text-align:center">For More Information and Booking</h1>
    <div class="footer-top" style=" background: rgba(6, 12, 34, 0.9);margin-top:0%">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 " style="padding: 7% ">
                    <a href="https://www.youtube.com/watch?v=TvYRouUj2Qs" target="_blank"><img src="https://image.flaticon.com/icons/svg/174/174883.svg" alt="TheEvenet" style="width:100%;height:100%; padding: 10%"></a>
                </div>
                <div class="col-lg-3 col-md-6 "style="padding: 7% ">
                    <a href="https://wa.me/62895368424403" target="_blank"><img src="https://image.flaticon.com/icons/svg/733/733585.svg" alt="TheEvenet"
                            style="width:100%;height:100%;padding: 10%"></a>
                </div>
                <div class="col-lg-3 col-md-6 "style="padding: 7% ">
                    <a href="https://www.instagram.com/flownesia/" target="_blank"><img src="https://image.flaticon.com/icons/svg/174/174855.svg" alt="TheEvenet"
                            style="width:100%;height:100%; padding: 10%"></a>
                </div>
                <div class="col-lg-3 col-md-6 " style="padding: 7% ">
                    <a href="/"><img src="https://image.flaticon.com/icons/svg/174/174848.svg" alt="TheEvenet" style="width:100%;height:100%; padding: 10%"></a>
                </div>

            </div>
        </div>
    </div>
</section>
@endforeach
@endsection

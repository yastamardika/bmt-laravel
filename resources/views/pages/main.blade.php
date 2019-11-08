@extends('layouts.front')
@section('konten')
<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">The Annual<br><span>Marketing</span> Conference</h1>
        <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
            data-autoplay="true"></a>
        <a href="#about" class="about-btn scrollto">About The Event</a>
    </div>
</section>
<section id="speakers" class="wow fadeInUp" style="background-color:black">
    <div class="container">
        <div class="section-header">
            <h2>Latest artist</h2>
            <p>Here are some of our newest artist</p>
        </div>

        <div class="row">
            @foreach ($artist as $p)
            <div class="col-lg-4 col-md-6">
                <div class="speaker">
                    <img src="{{ url('/data_file/'.$p->foto) }}" alt="Speaker 1" class="img-fluid">
                    <div class="details">
                        <h3><a href="speaker-details.html">{{ $p->nama_artist }}</a></h3>
                        <p>Quas alias incidunt</p>
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

</section>
<section id="gallery" class="wow fadeInUp" style="background-color:black">

    <div class="container">
        <div class="section-header">
            <h2>Gallery</h2>
            <p>Check our gallery from the recent events</p>
        </div>
    </div>

    <div class="owl-carousel gallery-carousel">
        @foreach ($artist as $p)
        <a href="{{ url('/data_file/'.$p->foto) }}" class="venobox" data-gall="gallery-carousel"><img
                src="{{ url('/data_file/'.$p->foto) }}" alt=""></a>
        @endforeach
    </div>



</section>

<br>
<br>
@endsection

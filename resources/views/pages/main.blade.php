@extends('layouts.front')
@section('konten')
<section id="" style="background:url('/img/image2.png'); background-size:cover;height:450px; margin-top:75px">
    <div id="" class="col-lg-6 col-md-6 offset-md-6 offset-lg-6" style="background:rgba(30, 30, 30, 0.72);padding:24px; height:100%">
        <h2 style="color:#FFFFFF"><b>Book Now!</b></h2>
        <br>
        @foreach($artist2 as $data)
        <h6 style="line-height:0.001px"><b>{{ $data->kategori }}</b></h6>
        <hr style="border:0.3px solid #FFFFFF">
        <h6 style="color:#FFFFFF"><b>{{ $data->nama_artist }}</b></h6>
        <h6 style="color:#FFFFFF">{{ $data->deskripsi }}</h6>
        <br>
        @endforeach
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
                        <h3><a href="/category/list/detail/{{ $p->id }}">{{ $p->nama_artist }}</a></h3>
                        <p>{{ $p->kategori }}</p>
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
            <p>Check our gallery from the recent performers</p>
        </div>
    </div>

    <div class="owl-carousel gallery-carousel">
        @foreach ($artist as $p)
        <a href="{{ url('/data_file/'.$p->foto) }}" class="venobox" data-gall="gallery-carousel"><img src="{{ url('/data_file/'.$p->foto) }}" alt=""></a>
        @endforeach
    </div>



</section>

<br>
<br>
@endsection
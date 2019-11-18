@extends('layouts.front')
@section('konten')
<br>
<section id="speakers" class="wow fadeInUp" style="background-color:black">
    <div class="container">
        <div class="section-header">
            <h2> {{ $kategori }}</h2>
            <p>Here are some of our newest artist</p>
        </div>
        @foreach ($artist as $p)
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="speaker"><a href="/category/list/detail/{{ $p->id }}">
                    <img src="{{ url('/data_file/'.$p->foto) }}" alt="Speaker 1" class="img-fluid"></a>
                    <div class="details">

                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3><a href="/category/list/detail/{{ $p->id }}">{{ $p->nama_artist }}</a></h3>
                <p>{{ $p->kategori }}</p>
                <p>{{ $p->deskripsi }}</p>
            </div>


        </div>
        @endforeach
    </div>

</section>
<br>
@endsection

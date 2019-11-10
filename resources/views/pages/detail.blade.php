@extends('layouts.front')
@section('konten')
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
@endsection

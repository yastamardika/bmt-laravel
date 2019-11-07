@extends('layouts.front')
@section('konten')
<section id="speakers" class="wow fadeInUp">
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

<div class="pl-5">
    <h3 style="color:#DBA053"> Latest Update</h3>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js">

<br>
<br>
@endsection

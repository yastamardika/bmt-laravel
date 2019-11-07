@extends('layouts.default')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container" id="utama">
        <h1 class="display-4">Book My Talent</h1>
        <p class="lead">Find talent for your events.
        </p>
    </div>
</div>
<div class="pl-5">
    <h3 style="color:#DBA053"> Latest Update</h3>
</div>
@foreach($artist as $p)
<div class="card-group" style="padding:2%;">
    <div class="card" style="margin:1%">
        <img class="card-img-top" style="max-height:20%;max-width:10%" src="{{ url('/data_file/'.$p->foto) }}"
            alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $p->nama_artist }}</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
@endforeach
<section class="pt-5 circle-1">

    <div class="ourworks-box container pb-5 pt-5">
        <h1 class="our-works-head">Our Clients say</h1>
        <p>Check out what clients say about my services. Happy clients all over the world. Share your experience with me
            by submitting your reviews</p>
    </div>

    <div class="container pb-5 position-relative">
        <div id="demo" class="carousel slide position-relative" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class=""></li>
                <li data-target="#demo" data-slide-to="1" class="active"></li>
                <li data-target="#demo" data-slide-to="2" class=""></li>
            </ul>


            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active carousel-item-left">
                    <div class="d-flex">
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">What a Service!!!!!Antony is one of the top Classy
                                        designer in the world.Exceeded expectation and designed my website to my
                                        requirments.Will be usingfor ongoing work.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p1"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>David Beckham</p>
                                        <p class="text-gray">Managing Director</p>
                                    </div>
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">What a Service!!!!!Antony is one of the top Classy
                                        designer in the world.Exceeded expectation and designed my website to my
                                        requirments.Will be usingfor ongoing work.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p2"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>David Luiz</p>
                                        <p class="text-gray">Ceo &amp; Founder</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">What a Service!!!!!Antony is one of the top Classy
                                        designer in the world.Exceeded expectation and designed my website to my
                                        requirments.Will be usingfor ongoing work.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p3"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>Donna Karan</p>
                                        <p class="text-gray">Fashion Designer</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="carousel-item carousel-item-next carousel-item-left">
                    <div class="d-flex">
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">What a Service!!!!!Antony is one of the top Classy
                                        designer in the world.Exceeded expectation and designed my website to my
                                        requirments.Will be usingfor ongoing work.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p1"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>David Luiz</p>
                                        <p class="text-gray">Ceo &amp; Founder</p>
                                    </div>
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">What a Service!!!!!Antony is one of the top Classy
                                        designer in the world.Exceeded expectation and designed my website to my
                                        requirments.Will be usingfor ongoing work.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p2"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>David Luiz</p>
                                        <p class="text-gray">Ceo &amp; Founder</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">What a Service!!!!!Antony is one of the top Classy
                                        designer in the world.Exceeded expectation and designed my website to my
                                        requirments.Will be usingfor ongoing work.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p3"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>Donna Karan</p>
                                        <p class="text-gray">Fashion Designer</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="carousel-item ">
                    <div class="d-flex">
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">What a Service!!!!!Antony is one of the top Classy
                                        designer in the world.Exceeded expectation and designed my website to my
                                        requirments.Will be usingfor ongoing work.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p1"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>Donna Karan</p>
                                        <p class="text-gray">Fashion Designer</p>
                                    </div>
                                </div>
                                <span></span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">What a Service!!!!!Antony is one of the top Classy
                                        designer in the world.Exceeded expectation and designed my website to my
                                        requirments.Will be usingfor ongoing work.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p2"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>David Luiz</p>
                                        <p class="text-gray">Ceo &amp; Founder</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column">
                            <a href="#" class="introduce pb-3">
                                <div class="flex-column-1 ">
                                    <p class="pr-2 pl-3 pt-4">What a Service!!!!!Antony is one of the top Classy
                                        designer in the world.Exceeded expectation and designed my website to my
                                        requirments.Will be usingfor ongoing work.</p>
                                </div>
                                <div class="flex-column-2 d-flex">
                                    <div class="pic p3"></div>
                                    <div class="information  flex-column pl-3 pt-2">
                                        <p>Donna Karan</p>
                                        <p class="text-gray">Fashion Designer</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Left and right controls -->

            <a class="carousel-control-prev" href="#demo" data-slide="prev" style="opacity: 1; left: -10%;">
                <i class="fas fa-chevron-left" style="color:#5969f6; font-size:30px;"></i>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next"
                style="opacity: 1; transform: rotate(-180deg); right: -10%;">
                <i class="fas fa-chevron-left" style="color:#5969f6; font-size:30px;"></i>
            </a>


        </div>



    </div>


</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js">

<br>
<br>
@endsection

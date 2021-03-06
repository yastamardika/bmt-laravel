@extends('layouts.front')
@section('konten')
<section id="intro">
    <i class="fas fa-chevron-left">cc</i>
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0 text-light">All kind of <br><span> Art</span> <br>
            performed by Locals</h1>
        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
            data-autoplay="true"></a> --}}
        <a href="#about" class="about-btn scrollto">Discover More</a>
    </div>
</section>
<section id="venue" class="wow fadeInUp" style="background-color:black">

    <div class="container-fluid">

        <div class="section-header" id="about">
            <h2>All Categories</h2>
            <p>Match the Performer Category for your event</p>
        </div>

        <div class="row no-gutters">
            <div class="col-lg-6 venue-info" style=" background: url('../img/musc.png');">
                <a href="/category/music">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8">
                            <h3>Music</h3>
                            <p style="text-align:center">Penampilan dari para talent yang membawakan permainan berbagai
                                macam instrumen
                                yang menghasilkan suara suara yang dapat dinikmati oleh penonton</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 venue-info" style="background: url('../img/dram.png');">
                <a href="/category/Drama">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8">
                            <h3>Drama</h3>
                            <p style="text-align:center">Pertunjukan sandiwara yang mengangkat berbagai macam tema,
                                alur, cerita yang dihadirkan
                                secara maksimal untuk memenuhi keinginan penonton dan menjadi tontonan yang menghibur
                                banyak kalangan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 venue-info" style="background: url('../img/danc.png');">
                <a href="/category/dance">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8">
                            <h3>Dance</h3>
                            <p style="text-align:center">Bergerak, Dinamis, Energik membuat penonton terpukau atas
                                keindahann gerakan yang
                                dibawakan. Dari Groovy style hingga tari tradisional selalu siap untuk mengisi event
                                yang
                                anda miliki</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 venue-info" style=" background: url('../img/fdc0.png');">
                <a href="/category/Mix Art">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8">
                            <h3>Mix Art</h3>
                            <p style="text-align:center">Percampuran apik dari kombinasi atas tiga kategori lainnya
                                serta kategori lain yang tidak tertera di sebelah. Memukau penonton merupakan hasil
                                akhir yang didapatkan atas percampuran seni pertunjukan yang indah</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
    <br>
    <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">
            @foreach ($artist as $p)
            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="{{ url('/data_file/'.$p->foto) }}" class="venobox" data-gall="venue-gallery">
                        <img src="{{ url('/data_file/'.$p->foto) }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</section>

@endsection

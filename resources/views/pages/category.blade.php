@extends('layouts.front')
@section('konten')
<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0 text-light">All kind of <br><span> Art</span> <br>
            performed by Locals</h1>
        <p class="mb-4 pb-0" style="color:#DBA053">10-12 December, Downtown Conference Center, New York</p>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
            data-autoplay="true"></a>
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
                <div class="row justify-content-center" >
                    <div class="col-11 col-lg-8">
                        <h3>Music</h3>
                        <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae
                            ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus.
                            Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 venue-info" style="background: url('../img/dram.png');">
                <div class="row justify-content-center" >
                    <div class="col-11 col-lg-8">
                        <h3>Drama</h3>
                        <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae
                            ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus.
                            Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 venue-info" style="background: url('../img/danc.png');">
                <div class="row justify-content-center" >
                    <div class="col-11 col-lg-8">
                        <h3>Dance</h3>
                        <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae
                            ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus.
                            Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 venue-info"  style=" background: url('../img/fdc0.png');">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-8">
                        <h3>Mix Art</h3>
                        <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae
                            ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus.
                            Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
 <br>
    <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="venue-gallery">
                    <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>
    </div>

</section>

@endsection

@include('includes.head')

<body style="background:black">

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="/" class="scrollto"><img src="{{URL::asset('/img/LOGO-02-01.png')}}" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="/#intro">Home</a></li>
                    <li><a href="/category">Categories</a></li>
                    <li><a href="/about">About</a></li>
                    <li class="buy-tickets"><a href="/addyourtalent#contact">Upload Your Talent</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->


    <main id="main">

        @yield('konten')
        <!--==========================
      Venue Section
    ============================-->

        <!--==========================
      Hotels Section
    ============================-->
        <section id="hotels" class="section-with-bg wow fadeInUp">

            <div class="container">
                <div class="section-header">
                    <h2>Hotels</h2>
                    <p>Her are some nearby hotels</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="hotel">
                            <div class="hotel-img">
                                <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
                            </div>
                            <h3><a href="#">Hotel 1</a></h3>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>0.4 Mile from the Venue</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="hotel">
                            <div class="hotel-img">
                                <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
                            </div>
                            <h3><a href="#">Hotel 2</a></h3>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                            </div>
                            <p>0.5 Mile from the Venue</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="hotel">
                            <div class="hotel-img">
                                <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
                            </div>
                            <h3><a href="#">Hotel 3</a></h3>
                            <div class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>0.6 Mile from the Venue</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <!--==========================
      Sponsors Section
    ============================-->
        <section id="supporters" class="section-with-bg wow fadeInUp">

            <div class="container">
                <div class="section-header">
                    <h2>Sponsors</h2>
                </div>

                <div class="row no-gutters supporters-wrap clearfix">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/1.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/3.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/4.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/5.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/6.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/7.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="img/supporters/8.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!--==========================
      F.A.Q Section
    ============================-->
        <section id="faq" class="wow fadeInUp">

            <div class="container">

                <div class="section-header">
                    <h2>F.A.Q </h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <ul id="faq-list">

                            <li>
                                <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at
                                    lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                                <div id="faq1" class="collapse" data-parent="#faq-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius
                                    morbi enim nunc faucibus a pellentesque? <i class="fa fa-minus-circle"></i></a>
                                <div id="faq2" class="collapse" data-parent="#faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur
                                    adipiscing elit pellentesque habitant morbi? <i class="fa fa-minus-circle"></i></a>
                                <div id="faq3" class="collapse" data-parent="#faq-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus.
                                    Aliquam eleifend mi in nulla? <i class="fa fa-minus-circle"></i></a>
                                <div id="faq4" class="collapse" data-parent="#faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec
                                    nam aliquam sem et tortor consequat? <i class="fa fa-minus-circle"></i></a>
                                <div id="faq5" class="collapse" data-parent="#faq-list">
                                    <p>
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                        suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                        Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                        turpis cursus in
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus
                                    ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                        class="fa fa-minus-circle"></i></a>
                                <div id="faq6" class="collapse" data-parent="#faq-list">
                                    <p>
                                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies
                                        leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet.
                                        Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu
                                        scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla
                                        phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <!--==========================
      Subscribe Section
    ============================-->
        <section id="subscribe">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Newsletter</h2>
                    <p>Rerum numquam illum recusandae quia mollitia consequatur.</p>
                </div>

                <form method="POST" action="#">
                    <div class="form-row justify-content-center">
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="Enter your Email">
                        </div>
                        <div class="col-auto">
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>

            </div>
        </section>

        <!--==========================
      Buy Ticket Section
    ============================-->
        <section id="buy-tickets" class="section-with-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h2>Buy Tickets</h2>
                    <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                                <h6 class="card-price text-center">$150</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                                    <li class="text-muted"><span class="fa-li"><i
                                                class="fa fa-times"></i></span>Community Access</li>
                                    <li class="text-muted"><span class="fa-li"><i
                                                class="fa fa-times"></i></span>Workshop Access</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After
                                        Party</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal"
                                        data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                                <h6 class="card-price text-center">$250</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                                    <li class="text-muted"><span class="fa-li"><i
                                                class="fa fa-times"></i></span>Workshop Access</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After
                                        Party</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal"
                                        data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                                <h6 class="card-price text-center">$350</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-toggle="modal"
                                        data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy
                                        Now</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal Order Form -->
            <div id="buy-ticket-modal" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Buy Tickets</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <select id="ticket-type" name="ticket-type" class="form-control">
                                        <option value="">-- Select Your Ticket Type --</option>
                                        <option value="standard-access">Standard Access</option>
                                        <option value="pro-access">Pro Access</option>
                                        <option value="premium-access">Premium Access</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn">Buy Now</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </section>

        <!--==========================
      Contact Section
    ============================-->


    </main>

@include('includes.footer')
</body>

</html>

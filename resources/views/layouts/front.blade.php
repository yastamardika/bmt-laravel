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
                    <li class="{{ (request()->is('/')) ? 'menu-active' : '' }}"><a href="/">Home</a></li>
                    <li class="{{ (request()->is('category*')) ? 'menu-active' : '' }}"><a
                            href="/category">Discovery</a></li>
                    <li class="{{ (request()->is('about*')) ? 'menu-active' : '' }}"><a href="/about">FaQ</a></li>
                    @auth
                    <li class="buy-tickets"><a href="/addyourtalent#contact">Upload Your Talent</a></li>
                    <li><a href="/logout">Logout</a> </li>
                    @endauth
                    @guest
                    <li style="text-align:left">
                        <div class="dropdown text-light">
                            <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <form class="dropdown-menu p-4 text-light"
                                style="background-color:black;border-color:#dba053" method="POST"
                                action="{{ route('login') }}">@csrf
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-sm-2 col-form-label">{{ __('E-Mail Address') }}</label>

                                    <div class="col-sm-15">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">{{ __('Password') }}</label>

                                    <div class="col-sm-15">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}><br />

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn" style="background:#dba053">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown text-light">
                            <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Sign Up
                            </a>
                            <form class="dropdown-menu p-4 text-light"
                            style="background-color:black;border-color:#dba053" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name"
                                        class="col-sm-2 col-form-label">{{ __('Name') }}</label>

                                    <div class="col-sm-15">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email"
                                        class="col-sm-2 col-form-label">{{ __('E-Mail Address') }}</label>

                                    <div class="col-sm-15">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                        class="col-sm-2 col-form-label">{{ __('Password') }}</label>

                                    <div class="col-sm-15">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                        class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>

                                    <div class="col-sm-15">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <br/>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-sm-2">
                                        <button type="submit" class="btn" style="background:#dba053">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>


                    @endguest

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
        {{-- <section id="hotels" class="section-with-bg wow fadeInUp">

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

        </section> --}}



    </main>

    @include('includes.footer')
</body>

</html>

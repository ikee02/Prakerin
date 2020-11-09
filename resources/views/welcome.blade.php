<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tugas Prakerin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />



        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="asset3/css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="asset3/css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="asset3/css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="asset3/css/magnific-popup.css">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="asset3/css/owl.carousel.min.css">
        <link rel="stylesheet" href="asset3/css/owl.theme.default.min.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="asset3/css/style.css">

        <!-- Modernizr JS -->
        <script src="asset3/js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>
         <div class="colorlib-loader"></div>

            <div id="page">
                <nav class="colorlib-nav" role="navigation">
                    <div class="top-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2">
                                    <div id="colorlib-logo"><a href="index.html">Hello</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
                <div class="overlay"></div>
                    <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
                    <div class="display-t text-center">
                        <div class="display-tc">
                            <div class="container">
                                <div class="col-md-12 col-md-offset-0">
                                    <div class="animate-box">
                                        <h2>Welcome</h2>
                                        <p>with Unapp's high quality features</p>


                                            @if (Route::has('login'))


                                                        @auth
                                                            <a href="{{ url('/home') }}">Home</a>

                                                        @else
                                                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-custom">Login</a>

                                                        @if (Route::has('register'))
                                                            <a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-custom">Register</a>
                                                        @endif

                                                    @endauth

                                            @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
        </div>

        <!-- jQuery -->
        <script src="asset3/js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="asset3/js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="asset3/js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="asset3/js/jquery.waypoints.min.js"></script>
        <!-- Stellar Parallax -->
        <script src="asset3/js/jquery.stellar.min.js"></script>
        <!-- YTPlayer -->
        <script src="asset3/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- Owl carousel -->
        <script src="asset3/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup -->
        <script src="asset3/js/jquery.magnific-popup.min.js"></script>
        <script src="asset3/js/magnific-popup-options.js"></script>
        <!-- Counters -->
        <script src="asset3/js/jquery.countTo.js"></script>
        <!-- Main -->
        <script src="asset3/js/main.js"></script>
    </body>
</html>

<!DOCTYPE  html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Exposiciones')</title>

        <!-- CSS -->
        {{ HTML::style('muestra/css/style.css', array('media' => 'screen')) }}
        {{ HTML::style('muestra/css/social-icons.css', array('media' => 'screen')) }}
        <!--[if IE 8]>
            {{ HTML::style('muestra/css/ie8-hacks.css', array('media' => 'screen')) }}
        <![endif]-->
        <!-- ENDS CSS -->	

        <!-- GOOGLE FONTS 
        <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->

        <!-- JS -->
        {{ HTML::script('muestra/js/jquery-1.5.1.min.js') }}
        {{ HTML::script('muestra/js/jquery-ui-1.8.13.custom.min.js') }}
        {{ HTML::script('muestra/js/easing.js') }}
        {{ HTML::script('muestra/js/jquery.scrollTo-1.4.2-min.js') }}
        {{ HTML::script('muestra/js/jquery.cycle.all.js') }}
        {{ HTML::script('muestra/js/custom.js') }}

        <!-- Isotope -->
        {{ HTML::script('muestra/js/jquery.isotope.min.js') }}

        <!--[if IE]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!--[if IE 6]>
                <script type="text/javascript" src="catalogarte/public/muestra/js/DD_belatedPNG.js"></script>
                <script>
                /* EXAMPLE */
                //DD_belatedPNG.fix('*');
        </script>
        <![endif]-->
        <!-- ENDS JS -->


        <!-- Nivo slider -->
        {{ HTML::style('muestra/css/nivo-slider.css', array('media' => 'screen')) }}
        {{ HTML::script('muestra/js/nivo-slider/jquery.nivo.slider.js') }}
        <!--<script src="js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>-->
        <!-- ENDS Nivo slider -->

        <!-- tabs -->
        {{ HTML::style('muestra/css/tabs.css', array('media' => 'screen')) }}
        {{ HTML::script('muestra/js/tabs.js') }}
        <!-- ENDS tabs -->

        <!-- prettyPhoto -->
        {{ HTML::script('muestra/js/prettyPhoto/js/jquery.prettyPhoto.js') }}
        {{ HTML::style('muestra/js/prettyPhoto/css/prettyPhoto.css', array('media' => 'screen')) }}
        <!-- ENDS prettyPhoto -->

        <!-- superfish -->
        {{ HTML::style('muestra/css/superfish.css', array('media' => 'screen')) }}
        {{ HTML::style('muestra/css/superfish-left.css', array('media' => 'screen')) }}
        {{ HTML::script('muestra/js/superfish-1.4.8/js/hoverIntent.js') }}
        {{ HTML::script('muestra/js/superfish-1.4.8/js/superfish.js') }}
        {{ HTML::script('muestra/js/superfish-1.4.8/js/supersubs.js') }}
        <!-- ENDS superfish -->

        <!-- poshytip -->
        {{ HTML::style('muestra/js/poshytip-1.0/src/tip-twitter/tip-twitter.css', array('media' => 'screen')) }}
        {{ HTML::style('muestra/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css', array('media' => 'screen')) }}
        {{ HTML::script('muestra/js/poshytip-1.0/src/jquery.poshytip.min.js') }}
        <!-- ENDS poshytip -->

        <!-- Tweet -->
        {{ HTML::style('muestra/css/jquery.tweet.css', array('media' => 'screen')) }}
        {{ HTML::script('muestra/js/tweet/jquery.tweet.js') }}
        <!-- ENDS Tweet -->

        <!-- Fancybox -->
        {{ HTML::style('muestra/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css', array('media' => 'screen')) }}
        {{ HTML::script('muestra/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js') }}
        <!-- ENDS Fancybox -->



    </head>

    <body class="home">

        <!-- HEADER -->
        @include('layouts.novaHeader')
        <!-- ENDS HEADER -->


        <!-- Menu -->
        @include('layouts.novaMenu')
        <!-- ENDS Menu -->




        <!-- Slider -->
        <!--<div id="slider-block">
            <div id="slider-holder">
                <div id="slider">
                    <a href="http://www.luiszuno.com"><img src="images/01.jpg" title="Visit my web site regularly and get freebies each week!" alt="" /></a>
                    <a href="http://themeforest.net/user/Ansimuz/portfolio?ref=ansimuz"><img src="images/02.jpg" title="Support the freebies buying high quality premium themes from my portfolio at themeforest" alt="" /></a>
                </div>
            </div>
        </div>-->
        <!-- ENDS Slider -->

        <!-- MAIN -->
        @section('page-content-area')
        contenido...
        @show
        <!-- ENDS MAIN -->

        <!-- FOOTER -->
        @include('layouts.novaFooter')
        <!-- ENDS FOOTER -->


        <!-- Bottom -->
        @include('layouts.novaBottom')
        <!-- ENDS Bottom -->

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> @yield('title') | terraincognita.pl</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link href="{{ asset('assets/css/main.min.css') }}" media="all" rel="stylesheet" type="text/css">
</head>
<body>

<!-- preloader -->
<div class="preloader">
    <div class="mainpreloader"><span></span></div>
</div>
<!-- preloader end -->

<!-- website -->
<div id="wraperexpedition">

    <!-- background -->
    <!-- background -->
    <div class="bgexpedition">
        <div id="owl-slider-home" class="owl-carousel">
            <div class="item">
                <img alt="background" src="{{ asset('assets/img/bg-6.jpg') }}">
                <div class="owl-slidertext">slide image 1/1</div>
            </div>
            <div class="item">
                <img alt="background" src="{{ asset('assets/img/bg-3.jpg') }}">
                <div class="owl-slidertext">slide image 1/2</div>
            </div>
            <div class="item">
                <img alt="background" src="{{ asset('assets/img/bg-4.jpg') }}">
                <div class="owl-slidertext">slide image 1/3</div>
            </div>
        </div>
    </div>
    <div class="bgcolor noselect"></div>


    <!-- navigation -->
    <!-- logo -->
    <div id="logo" class="brand-expedition noselect animfadeInLeft" data-time="0">
        <a href="/"><img alt="background" src="{{ asset('assets/img/logo.png') }}"></a>
    </div>

    <!-- menu navigation -->
    <div id="nav-icon" class="animfadeInRight" data-time="150">
        <div class="menu-line"></div>
        <div class="menu-line1"></div>
        <div class="menu-line2"></div>
    </div>

    <div class="overlay-menu"></div><!-- overlay block -->
    <nav>
        <div class="main-menu">
            <ul id="nav-menu" class="effect-menu">
                <li class="init-menu">
                    <a class="menu-navigation active" data-hover="HOME">HOME</a>
                </li>
                <li class="init-menu">
                    <a class="menu-navigation" href="/o-nas" data-hover="ABOUT US">O NAS</a>
                    <ul>
                        <li><a href="/my">MY</a></li>
                        <li><a href="/w-mediach">W MEDIACH</a></li>
                        <li><a href="/partnerzy-i-sponsorzy">PARTNERZY I SPONSORZY</a></li>
                    </ul>
                </li>
                <li class="init-menu">
                    <a class="menu-navigation" data-hover="DISCOVER US" href="/wesprzyj-nas">WESPRZYJ NAS</a>
                </li>
                <li class="init-menu">
                    <a class="menu-navigation" data-hover="DISCOVER US" href="/nasze-wyprawy">WYPRAWY</a>
                </li>
                <li class="init-menu">
                    <a href="/aktualnosci" class="menu-navigation" data-hover="THE NEWS">AKTUALNOŚCI</a>
                </li>
                <li class="init-menu">
                    <a class="menu-navigation" href="/kontakt" data-hover="CONTACT">KONTAKT</a>
                </li>
            </ul>
        </div>
        <div class="holdsidebar"></div>
    </nav>
    <!-- menu navigation end -->


    <!-- content home -->
@yield('content')
<!-- content home end -->

    <!-- toggle gallery -->
    <div class="nav-bottom">
        <div id="opengal">
            <i class="fa fa-angle-up"></i>
            <span>Galeria video</span>
        </div>
    </div>
    <!-- toggle gallery end -->

    <!-- gallery -->
    <div class="bottom-option">
        <!-- close gallery -->
        <div class="nav-bottom-close">
            <span>zamknij</span>
            <i class="fa fa-angle-down"></i>
        </div>
        <!-- close gallery end -->

        <!-- main gallery -->
        <div id="owl-gal" class="owl-carousel">

            @foreach($videos as $video)
                <div class="item">
                    <div class="port">
                        <div class="hovereffect">
                            <img class="gray-color" src="{{ $video->ico }}" alt="imageportofolio"/>
                            <div class="overlay">
                                <h2>{{ $video->title }}</h2>
                                <a class="info big-video"
                                   href="{{ $video->link_to_video }}">@if(!empty($video->lead)){{ $video->lead }}<br/><br/>@endif zobacz</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- main gallery end -->


    </div>
    <!-- gallery end -->

    <!-- footer -->
    <div class="footer animfadeInRight" data-time="900">© All rights reserved. expedition 2017</div>
    <div class="soc-icon animfadeInLeft" data-time="1200">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
    </div>
    <!-- footer end -->

</div>
<!-- website end -->

<!-- expedition JS -->

@yield('js')
<script src="{{ asset('assets/js/main.min.js') }}" type="text/javascript"></script>
</body>
</html>

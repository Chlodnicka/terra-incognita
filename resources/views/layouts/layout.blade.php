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
    <style>
        @media (max-width: 950px) {
            .overlay-home.noselect.intro {
                background-size: auto 100% !important;
            }
        }
        @media (min-width: 951px) {
            .overlay-home.noselect.intro {
                background-size: 100%;
            }
        }
    </style>
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
    <div class="bgexpedition">

        <div id="owl-slider-home" class="owl-carousel">
            <div class="item imgbg" style="background-size: 100%; background-image:url('@yield('background')')"></div>
        </div>
    </div>

</div>
<div class="overlay-home noselect" style="background-size: 100%; background-image:url('@yield('background')')">
    <div class="layer"></div>
</div>


<!-- navigation -->
<!-- logo -->
<div id="logo" class="brand-expedition noselect animfadeInLeft" data-time="0">
    <a href="/"><img alt="background" style="max-width: 105px" src="{{ asset('assets/img/TIP-logo.png') }}"></a>
</div>
<!--header -->
<header>
    <div id="main-menu" class="menu-init intro">
        <!-- mainmenu start -->
        <nav>
            <ul class="intro">
                <li class="current-menu-item animfadeInRight intro" data-time="1000"><a href="/w-mediach" class="intro">W
                        mediach</a></li>
                <li class="current-menu-item animfadeInRight intro" data-time="1100"><a href="/partnerzy-i-sponsorzy"
                                                                                        class="intro">Partnerzy</a></li>
                <li class="current-menu-item animfadeInRight intro" data-time="1200"><a href="/galeria-video"
                                                                                        class="intro">Galeria video</a>
                </li>
                <li class="animfadeInRight intro" data-time="1300"><a href="/wesprzyj-nas" class="intro">Wesprzyj
                        nas</a></li>
                <li class="animfadeInRight intro" data-time="1400"><a href="/wyprawy" class="intro">Wyprawy</a></li>
                <li class="animfadeInRight intro" data-time="1500"><a href="/kontakt" class="intro">Kontakt</a></li>
            </ul>
        </nav>
        <!-- mainmenu end -->
    </div>
    <!-- navigation mobile -->
    <div class="anim-nav intro" id="nav-icon">
        <div class="menu-line intro"></div>
        <div class="menu-line1 intro"></div>
        <div class="menu-line2 intro"></div>
    </div>
    <!-- navigation mobile end -->
</header>
<!--header end -->
<div class="nav-top-block intro"></div>

@yield('content')
<!-- content home end -->


<div class="soc-icon animfadeInLeft intro" data-time="1200">
    <a href="https://www.facebook.com/TerraIncognitaProject/" target="_blank" class="intro"><i
                class="fa fa-facebook intro"></i></a>
    <a href="https://www.instagram.com/terraincognitaprojekt/" target="_blank" class="intro"><i
                class="fa fa-instagram intro"></i></a>
    <a href="https://www.youtube.com/channel/UCVxSyzSwI5hfDKmTguAUVjw" target="_blank" class="intro"><i
                class="fa fa-youtube-play intro"></i></a>
</div>


<!-- Plugin JS -->
<script src="{{ asset('assets/js/pluginsexpedition.js') }}" type="text/javascript"></script>
<!-- expedition JS -->
<script src="{{ asset('assets/js/expedition.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/main.min.js') }}" type="text/javascript"></script>

</body>
</html>

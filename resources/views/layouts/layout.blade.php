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


<!-- navigation -->
<!-- logo -->
<div id="logo" class="brand-expedition noselect animfadeInLeft" data-time="0">
    <a href="/"><img alt="background" style="max-width: 150px" src="{{ asset('assets/img/logo.png') }}"></a>
</div>
<!--header -->
<header>
    <div id="main-menu" class="menu-init intro">
        <!-- mainmenu start -->
        <nav>
            <ul class="intro">
                <li class="current-menu-item animfadeInRight intro" data-time="900"><a href="/" class="intro">Home</a></li>
                <li class="animfadeInRight intro" data-time="1000"><a class="intro">O nas</a>
                    <ul class="intro">
                        <li class="intro"><a href="/my" class="intro">My</a></li>
                        <li class="intro"><a href="/w-mediach" class="intro">W mediach</a></li>
                        <li class="intro"><a href="/partnerzy-i-sponsorzy" class="intro">Partnerzy</a></li>
                    </ul>
                </li>
                <li class="animfadeInRight intro" data-time="1100"><a href="/wesprzyj-nas" class="intro">Wesprzyj nas</a></li>
                <li class="animfadeInRight intro" data-time="1200"><a href="/wyprawy" class="intro">Wyprawy</a></li>
                <li class="animfadeInRight intro" data-time="1300"><a href="/aktualnosci" class="intro">Aktualności</a></li>
                <li class="animfadeInRight intro" data-time="1400"><a href="/kontakt" class="intro">Kontakt</a></li>
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
                               href="{{ $video->link_to_video }}">@if(!empty($video->lead)){{ $video->lead }}<br/>
                                <br/>@endif zobacz</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <!-- main gallery end -->


</div>


<!-- Plugin JS -->
<script src="plugin/pluginsexpedition.js" type="text/javascript"></script>
<!-- expedition JS -->
<script src="js/expedition.js" type="text/javascript"></script>
@yield('js')
<script src="{{ asset('assets/js/main.min.js') }}" type="text/javascript"></script>
</body>
</html>

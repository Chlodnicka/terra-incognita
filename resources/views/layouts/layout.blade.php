<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> @yield('title') | terraincognita.pl</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link href="assets/css/main.min.css" media="all" rel="stylesheet" type="text/css">
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
                <img alt="background" src="assets/img/bg-6.jpg">
                <div class="owl-slidertext">slide image 1/1</div>
            </div>
            <div class="item">
                <img alt="background" src="assets/img/bg-3.jpg">
                <div class="owl-slidertext">slide image 1/2</div>
            </div>
            <div class="item">
                <img alt="background" src="assets/img/bg-4.jpg">
                <div class="owl-slidertext">slide image 1/3</div>
            </div>
        </div>
    </div>
    <div class="bgcolor noselect"></div>


    <!-- navigation -->
    <!-- logo -->
    <div id="logo" class="brand-expedition noselect animfadeInLeft" data-time="0">
        <a href="index.html"><img alt="background" src="assets/img/logo.png"></a>
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
            <span>experience</span>
        </div>
    </div>
    <!-- toggle gallery end -->

    <!-- gallery -->
    <div class="bottom-option">
        <!-- close gallery -->
        <div class="nav-bottom-close">
            <span>close</span>
            <i class="fa fa-angle-down"></i>
        </div>
        <!-- close gallery end -->

        <!-- main gallery -->
        <div id="owl-gal" class="owl-carousel">

            <div class="item">
                <div class="port">
                    <div class="hovereffect">
                        <img class="gray-color" src="assets/img/portofolio/1.jpg" alt="imageportofolio"/>
                        <div class="overlay">
                            <h2>dailymotion video</h2>
                            <a class="info big-video"
                               href="http://www.dailymotion.com/video/x4gwyxl_happiness-royalty-free-music-for-commercial-use_music">click
                                here</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="port">
                    <div class="hovereffect">
                        <img class="gray-color" src="assets/img/portofolio/2.jpg" alt="imageportofolio"/>
                        <div class="overlay">
                            <h2>Lattest news</h2>
                            <a class="info detail-page" href="page-news/news-2.html">click here</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="port big-img">
                    <div class="hovereffect">
                        <a href="img/portofolio/3.jpg">
                            <img class="gray-color" src="assets/img/portofolio/3.jpg" alt="imageportofolio"/>
                            <div class="overlay">
                                <h2>portofolio image</h2>
                                <span class="info">click here</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="port big-img">
                    <div class="hovereffect">
                        <a href="img/portofolio/4.jpg">
                            <img class="gray-color" src="assets/img/portofolio/4.jpg" alt="imageportofolio"/>
                            <div class="overlay">
                                <h2>portofolio image</h2>
                                <span class="info">click here</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="port big-img">
                    <div class="hovereffect">
                        <a href="img/portofolio/5.jpg">
                            <img class="gray-color" src="assets/img/portofolio/5.jpg" alt="imageportofolio"/>
                            <div class="overlay">
                                <h2>portofolio image</h2>
                                <span class="info">click here</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="port big-img">
                    <div class="hovereffect">
                        <a href="img/portofolio/6.jpg">
                            <img class="gray-color" src="assets/img/portofolio/6.jpg" alt="imageportofolio"/>
                            <div class="overlay">
                                <h2>portofolio image</h2>
                                <span class="info">click here</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="port">
                    <div class="hovereffect">
                        <img class="gray-color" src="assets/img/portofolio/7.jpg" alt="imageportofolio"/>
                        <div class="overlay">
                            <h2>Lattest news</h2>
                            <a class="info detail-page" href="page-news/news-2.html">click here</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="port">
                    <div class="hovereffect">
                        <img class="gray-color" src="assets/img/portofolio/1.jpg" alt="imageportofolio"/>
                        <div class="overlay">
                            <h2>youtube video</h2>
                            <a class="info big-youtube" href="https://www.youtube.com/watch?v=VsJkxWvQJIM">click
                                here</a>
                        </div>
                    </div>
                </div>
            </div>


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
<script src="assets/js/main.min.js" type="text/javascript"></script>
</body>
</html>

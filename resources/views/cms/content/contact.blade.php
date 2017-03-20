@extends('layouts.cms-layout')

@section('title', 'Skontaktuj się z nami')

@section('content')

    <div class="main-content">
        <div class="row"><!-- row -->

            <!-- contact -->
            <div class="col-md-12">
                <h1 class="animbounceInLeft" data-time="600">GET IN TOUCH</h1>
                <h2 class="animbounceInLeft" data-time="900">Ask you travel tips, ideas or inspiration?</h2>
                <div class="devider-page animfadeInLeft" data-time="1100"></div>
            </div>

            <div class="col-md-4 col-xs-12 spaceup spacedown animfadeInUp" data-time="1100">
                <h4>GDZIE NAS ZNALEŹĆ</h4>
                <p>129 Park Ave, New York, NY 10903</p>
            </div>

            <div class="col-md-4 col-xs-12 spaceup spacedown animfadeInUp" data-time="1400">
                <h4>ZADZWOŃ</h4>
                <p>+6221.987.654.321</p>
            </div>

            <div class="col-md-4 col-xs-12 spaceup spacedown animfadeInUp" data-time="1700">
                <h4>WYŚLIJ MAILA</h4>
                <a href="mailto:service@vertix.com?Subject=Hello%20again">marketing@expediton.com</a>
            </div>

            <!-- map -->
            <div id="map" class="spacedown animfadeInUp" data-time="2000"></div>

            <!-- contact form -->
            <div class="col-md-12 col-xs-12 spacedown animfadeInUp" data-time="2400">
                <div class="form-group contact">
                    <form action="#" class="row" id="form1" method="post" name="form1">
                        <input id="name" name="name" placeholder="your name" type="text">
                        <input id="email" name="email" placeholder="your e-mail" type="text">
                        <div class="error" id="error_email">Please check your email</div>
                        <textarea cols="50" id="message" name="message" placeholder="your enquiry" rows="4"></textarea>
                        <div class="error" id="error_message">Please check your message</div>
                        <div class="success" id="mail_success">Thank you. Your message has been sent.</div>
                        <div class="error" id="mail_failed">Error, email not sent</div>
                        <button id="send" class="btn-content" type="submit">SENT NOW</button>
                    </form>
                </div>
            </div>
            <!-- contact form end -->
            <!-- contact end -->
        </div><!-- row end -->
    </div>
@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script>
    <script src="assets/js/map.js" type="text/javascript"></script>
@endsection
@extends('layouts.layout')

@section('title', 'Skontaktuj się z nami')

@section('background', $content->ico)

@section('content')

    <div class="main-content">
        <div class="row"><!-- row -->

            <!-- contact -->
            <div class="col-md-12">
                <h1 class="animbounceInLeft" data-time="600">Kontakt</h1>
                @if(!empty($content->lead))<h2 class="animbounceInLeft" data-time="900">{{ $content->lead }}</h2>@endif
                <div class="devider-page animfadeInLeft" data-time="1100"></div>
            </div>

            <div class="col-md-4 col-xs-12 spaceup spacedown animfadeInUp" data-time="1100">
                <h4>GDZIE NAS ZNALEŹĆ</h4>
                <p>{{ $content->string_2 }}</p>
            </div>

            <div class="col-md-4 col-xs-12 spaceup spacedown animfadeInUp" data-time="1400">
                <h4>ZADZWOŃ</h4>
                <p>{{ $content->long_string_1 }}</p>
            </div>

            <div class="col-md-4 col-xs-12 spaceup spacedown animfadeInUp" data-time="1700">
                <h4>WYŚLIJ MAILA</h4>
                <a href="mailto:{{ $content->string_3 }}">{{ $content->string_3 }}</a>
            </div>

            <!-- map
            <div id="map" class="spacedown animfadeInUp" data-time="2000"></div>-->
            <!-- contact form -->
            <div class="col-md-12 col-xs-12 spacedown animfadeInUp" data-time="2400">
                @if($form == 'sent')
                    <p>Wiadomość została wysłana</p>
                @elseif($form == 'error')
                    <p>Błąd podczas wysyłania. Spróbuj jeszcze raz za kilka minut.</p>
                @endif
                <div class="form-group contact">
                    <form action="/wyslij-mail" class="row" id="form1" method="post" name="form1">
                        {!! csrf_field() !!}
                        <input id="name" name="name" placeholder="Imię" type="text">
                        <input id="email" name="email" placeholder="E-mail" type="text">
                        <div class="error" id="error_email">Wpisz poprawny adres e-mail</div>
                        <textarea cols="50" id="message" name="content" placeholder="Treść" rows="4"></textarea>
                        <div class="error" id="error_message">To pole jest wymagane</div>
                        <div class="success" id="mail_success">Dzięki - Twoja wiadomość została wysłana</div>
                        <div class="error" id="mail_failed">Wystąpił błąd - spróbuj jeszcze raz.</div>
                        <button class="btn-content" type="submit">WYŚLIJ</button>
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
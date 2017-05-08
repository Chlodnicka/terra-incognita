@extends('layouts.layout')

@section('title', 'Aktualności')

@section('background', $background->ico)

@section('content')
    <div class="main-content">
        <div class="row"><!-- row -->

            <!-- About -->
            <div class="col-md-12">
                <h1 class="animbounceInLeft" data-time="600">Partnerzy i sponsorzy</h1>
                <div class="devider-page animfadeInLeft" data-time="1100"></div>
            </div>


            <div class="col-md-12 spacedown animfadeInUp" data-time="1800">
                <p>Do realizacji naszego projektu nie wystarczą dobre chęci, trening i motywacja. Przedsięwzięcie to
                    wymaga niemałego nakładu środków finansowych, które znacznie wykraczają poza nasz wkład własny. Stąd
                    prośbę o wsparcie kierujemy do właścicieli firm i przedsiębiorstw chcących wesprzeć naszą
                    inicjatywę. Wszystkich zainteresowanych prosimy o kontakt mailowy lub telefoniczny.</p>
            </div>

            <!-- client brands-->

            <div id="owl-brand" class="owl-carousel">
                @foreach($partners as $partner)
                    <div class="item"><a href="{{ $partner->link_to_service }}"><img style="max-width: 100%;" alt="{{ $partner->name }}" src="{{ $partner->ico }}"></a></div>
                @endforeach
            </div>
            <!-- client brands end-->
            <!-- About end -->
        </div><!-- row end -->
    </div>
@endsection
@extends('layouts.layout')

@section('title', 'O nas')

@section('background', $content->string_1)

@section('content')

    <div class="main-content">
        <div class="row"><!-- row -->

            <!-- About -->
            <div class="col-md-12">
                <h1 class="animbounceInLeft" data-time="600">O nas</h1>
                @if(!empty($content->lead))<h2 class="animbounceInLeft" data-time="900">{{ $content->lead }}</h2>@endif
                <div class="devider-page animfadeInLeft" data-time="1100"></div>
            </div>

            <!-- service -->
            <div class="col-md-6 spaceup spacedown animfadeInUp" data-time="900">
                <h4>Grzesiek</h4>
                <div>{!! $content->long_string_1 !!} </div>
            </div>
            <div class="col-md-6 spaceup spacedown animfadeInUp" data-time="1200">
                <h4>Maciek</h4>
                <div>{!! $content->text !!}</div>
            </div>


            <!-- About end -->
        </div><!-- row end -->
    </div>

@endsection

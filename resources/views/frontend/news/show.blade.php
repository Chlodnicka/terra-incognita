@extends('layouts.layout')

@section('title', 'Aktualności')


@section('content')
    <div class="main-content">
        <div class="row"><!-- row -->


            <div class="col-md-12 spacedown">
                <h3 class="animbounceInLeft" data-time="600">{{ $item->title }}</h3>
                <h4 class="animbounceInLeft" data-time="900">{{ date( 'd-m-Y',strtotime($item->date)) }}</h4>
                <div class="devider-page animfadeInLeft" data-time="1100"></div>


            </div>

            <div class="col-md-12 spaceup spacedown animfadeInUp" data-time="1200">
                <img class="" alt="newsimage" src="{{ $item->ico }}">
                <div class="lead">{{ $item->lead }}</div>
                <div class="text">{!! $item->text !!}</div>
            </div>

            <div class="btn-content spaceup spacedown animfadeInUp" data-time="1200"  role="button"><a class=" link-class" href="/aktualnosci">WRÓĆ</a></div>

            <!-- News end -->
        </div><!-- row end -->
    </div>
@endsection
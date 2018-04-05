@extends('layouts.layout')

@section('title', 'Aktualności')

@section('background', $background->ico)

@section('content')
    <!-- content -->
    <div class="main-content">
        <div class="row"><!-- row -->


            <div class="col-md-12 spacedown">
                <h1 class="animbounceInLeft" data-time="600">Galeria video</h1>
                <div class="devider-page animfadeInLeft" data-time="1100"></div>
            </div>

            <!-- News  -->
            <div class="col-md-12 ">
                @foreach($videos as $item)
                    <h2 class="intro">{{ $item->title }}</h2>

                    <iframe width="100%" height="700"
                            src="{{ str_replace("watch?v=","embed/",$item->link_to_video) }}">
                    </iframe>

                @endforeach
            </div>
            <!-- News end -->
        </div><!-- row end -->
    </div>
@endsection
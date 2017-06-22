@extends('layouts.layout')

@section('title', 'Wyprawy')

@section('background', $background->ico)

@section('content')


    <!-- content -->
    <div class="main-content">
        <div class="row"><!-- row -->

            <!-- Discover -->
            <div class="col-md-12 spacedown">
                <h1 class="animbounceInLeft" data-time="600">Nasze wyprawy</h1>
                <h2 class="animbounceInLeft" data-time="900">Odkrywaj z nami świat</h2>
                <div class="devider-page animfadeInLeft" data-time="1100"></div>
            </div>

            @foreach($expeditions as $expedition)
                <div class="col-md-12 expedition spacedown animfadeInUp " time="1300">
                    <div class="expedition-list-item">
                        <h3>{{ $expedition->title }}</h3>
                        <div class="devider-page-content"></div>
                        @if(!empty($expedition->ico))
                            <img class="" alt="discoverimage" src="{{ $expedition->ico }}">
                        @endif
                        <p>{{ $expedition->lead }}</p>

                        <div class="btn-content"><a class="link-class" href="/wyprawy/{{ $expedition->id }}">ZOBACZ
                                WIĘCEJ</a></div>
                    </div>

                </div>
        @endforeach

        <!-- Discover end -->
        </div><!-- row end -->
    </div>
@endsection
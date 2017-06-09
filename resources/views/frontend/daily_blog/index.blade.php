@extends('layouts.layout')

@section('title', 'Wyprawy')

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
                <div class="col-md-12 color-gray spacedown animfadeInUp" data-time="1300">
                    <h3>{{ $expedition->title }}</h3>
                    <div class="devider-page-content"></div>
                    <img class="" alt="discoverimage" src="{{ $expedition->ico }}">
                    <p>{{ $expedition->lead }}</p>
                    <div class="btn-content"><a class="link-class" href="/wyprawy/{{ $expedition->id }}">ZOBACZ WIĘCEJ</a></div>
                </div>
            @endforeach

            <!-- Discover end -->
        </div><!-- row end -->
    </div>
@endsection
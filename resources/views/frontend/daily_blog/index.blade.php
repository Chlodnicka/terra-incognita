@extends('layouts.layout')

@section('title', 'Wyprawy')

@section('content')


    <!-- content -->
    <div class="main-content">
        <div class="row"><!-- row -->

            <!-- Discover -->
            <div class="col-md-12 spacedown">
                <h1 class="animbounceInLeft" data-time="600">{{ $expedition->title }}</h1>
                <h2 class="animbounceInLeft" data-time="900">Dziennik wyprawy</h2>
                <div class="devider-page animfadeInLeft" data-time="1100"></div>
            </div>
            <div class="btn-content spaceup spacedown animfadeInUp" data-time="1200" role="button"><a
                        class=" link-class" href="/wyprawy/{{$expedition->id}}">WRÓĆ</a></div>
            <br />
            <br />
            <br />
            <br />
            @foreach($expedition->dailyBlog as $post)
                <div class="col-md-12 color-gray spacedown animfadeInUp" data-time="1300">
                    <h3>{{ $post->title }}</h3>
                    <div class="devider-page-content"></div>
                    <img class="" alt="discoverimage" src="{{ $post->ico }}">
                    <p>{{ $post->lead }}</p>
                    <div class="btn-content"><a class="link-class" href="/wyprawa/wpis/{{ $post->id }}">ZOBACZ WIĘCEJ</a></div>
                </div>
            @endforeach

            <div class="btn-content spaceup spacedown animfadeInUp" data-time="1200" role="button"><a
                        class=" link-class" href="/wyprawy/{{$expedition->id}}">WRÓĆ</a></div>
            <!-- Discover end -->
        </div><!-- row end -->
    </div>
@endsection
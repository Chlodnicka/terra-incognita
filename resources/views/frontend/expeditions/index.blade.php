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
            <div class="col-md-12 color-gray spacedown animfadeInUp" data-time="1600">
                <h3>Sea Discover</h3>
                <div class="devider-page-content"></div>
                <img class="img-cont" alt="discoverimage" src="img/discover/sea.jpg">
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehnderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel
                    illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                <div class="btn-content"><a class="detail-page link-class" href="page-discover/seadis.html">THE TEAM</a>
                </div>
            </div>

            <div class="col-md-12 color-gray spacedown">
                <h3>Hike</h3>
                <div class="devider-page-content"></div>
                <img class="img-cont" alt="discoverimage" src="img/discover/hike.jpg">
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehnderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel
                    illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                <div class="btn-content"><a class="detail-page link-class" href="page-discover/hike.html">THE TEAM</a>
                </div>
            </div>

            <!-- Discover end -->
        </div><!-- row end -->
    </div>
@endsection
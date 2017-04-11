@extends('layouts.layout')

@section('title', 'Aktualności')

@section('content')


    <!-- content -->
    <div class="main-content">
        <div class="row"><!-- row -->


            <div class="col-md-12 spacedown">
                <h1 class="animbounceInLeft" data-time="600">Aktualności</h1>
                <h2 class="animbounceInLeft" data-time="900">Co, gdzie, kiedy i jak?</h2>
                <div class="devider-page animfadeInLeft" data-time="1100"></div>
            </div>

            <!-- News  -->
            @foreach($news as $item)
            <div class="col-md-5 m-15px color-gray spaceup animfadeInUp" data-time="1300">
                <i class="left spaceicon-right fa fa-calendar-o" aria-hidden="true"></i>
                <h4>{{ date( 'd-m-Y',strtotime($item->date)) }}</h4>
                <h3>{{ $item->title }}</h3>
                <div class="devider-page-content"></div>
                <p>{{ $item->lead }}</p>
                <div class="btn-content"  role="button"><a class=" link-class" href="/aktualnosci/{{ $item->id }}">ZOBACZ WIĘCEJ</a></div>
            </div>
            @endforeach

            <!-- News end -->
        </div><!-- row end -->
    </div>
@endsection
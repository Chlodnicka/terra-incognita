@extends('layouts.layout')

@section('title', 'Terra Incognita')

@section('background', '/assets/img/bg.jpg')

@section('content')
    <div class="contentexpedition">

        <div class="row"><!-- row -->
            <!-- col -->
            <div class="col-md-12">
                <h1 class="animfadeInUpBig" data-time="1500">TERRA INCOGNITA PROJECT</h1>
                <!--     <div class="devider-center animfadeInUpBig" data-time="1700"></div>
                   <div id="slidertext" class="animfadeInUpBig" data-time="1800">
                        <div class="main-text">wild experience</div>
                        <div class="main-text">awesome life</div>
                        <div class="main-text">challenge your life</div>
                    </div>-->
                @if(count($main_expedition) > 0)
                    <div class="btn-home animfadeInLeft" data-time="2100"><a class="link-class"
                                                                             href="/wyprawy/{{ $main_expedition->id }}">{{ $main_expedition->title }}</a>
                    </div>
                @endif
                <div class="btn-home animfadeInLeft" data-time="2100"><a class="link-class" href="/o-nas">O NAS</a>
                </div>
                <div class="btn-home animfadeInRight" data-time="2400"><a class="link-class" href="/aktualnosci">AKTUALNOŚCI</a>
                </div>

            </div>
            <!-- col end -->

        </div><!-- row end -->

    </div>
@endsection
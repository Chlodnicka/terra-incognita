@extends('layouts.layout')

@section('title', 'Aktualności')

@section('content')
    <div class="main-content">
        <div class="row"><!-- row -->


            <div class="col-md-12 spacedown">
                <h3 class="animbounceInLeft" data-time="600">{{ $expedition->title }}</h3>
                <ul>
                    @foreach($expedition->sections as $section)
                        <li><a href="/wyprawa/sekcja/{{ $section->id }}">{{ $section->type }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-12 spaceup spacedown animfadeInUp" data-time="1200">
                <img class="" alt="newsimage" src="{{ $expedition->ico }}">
                <div class="lead">{{ $expedition->lead }}</div>
                <div class="text">{!! $expedition->text !!}</div>
            </div>

            <div class="btn-content spaceup spacedown animfadeInUp" data-time="1200" role="button"><a
                        class=" link-class" href="/wyprawy">WRÓĆ</a></div>
        </div>
    </div>

@endsection
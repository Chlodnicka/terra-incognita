@extends('layouts.layout')

@section('title', 'Aktualności')

@section('background', $expedition_section->expedition->ico)

@section('content')
    <div class="main-content">
        <div class="row"><!-- row -->


            <div class="col-md-12 spacedown">
                <h3 class="animbounceInLeft" data-time="600">{{ $expedition_section->expedition->title }}</h3>
                <ul>
                    @foreach($expedition_section->expedition->sections as $section)
                        <li><a href="/wyprawa/sekcja/{{ $section->id }}">{{ $names[$section->type] }}</a></li>
                    @endforeach
                    @if(count($expedition_section->expedition->dailyBlog) > 0)
                        <li><a href="/wyprawa/dziennik/{{ $expedition_section->expedition->id }}">Dziennik wyprawy</a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="col-md-12 spaceup spacedown animfadeInUp" data-time="1200">
                <div class="lead">{{ $expedition_section->lead }}</div>
                <div class="text">{!! $expedition_section->text !!}</div>
            </div>

            <div class="btn-content spaceup spacedown animfadeInUp" data-time="1200" role="button"><a
                        class=" link-class" href="/wyprawy/{{ $expedition_section->expedition->id }}">WRÓĆ</a></div>
        </div>
    </div>

@endsection

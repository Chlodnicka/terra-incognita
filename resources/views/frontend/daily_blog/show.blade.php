@extends('layouts.layout')

@section('title', 'Dziennik wyprawy')

@section('background', $daily_blog->expedition->ico)

@section('content')
    <!-- content -->
    <div class="main-content">
        <div class="row"><!-- row -->

            <!-- Discover -->
            <div class="col-md-12 spacedown">
                <h1 class="animbounceInLeft" data-time="600">{{ $daily_blog->title }}</h1>
                <h2 class="animbounceInLeft" data-time="900">{{  $daily_blog->expedition->title }}</h2>
                <div class="devider-page animfadeInLeft" data-time="1100"></div>
            </div>

            <div class="col-md-12 spaceup spacedown animfadeInUp" data-time="1200">
               @if(!empty($daily_blog->ico))
		 <img class="" alt="newsimage" src="{{  $daily_blog->ico }}">
		@endif
                <div class="lead">{{  $daily_blog->lead }}</div>
                <div class="text">{!!  $daily_blog->text !!}</div>
            </div>

            <br/>
            <br/>
            <br/>
            <div class="btn-content spaceup spacedown animfadeInUp" data-time="1200" role="button"><a
                        class=" link-class" href="/wyprawa/dziennik/{{$daily_blog->expedition->id}}">WRÓĆ</a></div>
            <br/>
            <br/>
            <br/>
            <div class="col-md-12 spaceup spacedown animfadeInUp" data-time="1200">
                <div class="comments">
                    <form method="post" action="/dziennik_wyprawy/dodaj_komentarz/{{ $daily_blog->id }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="news_id" value="{{ $daily_blog->id }}">
                        <input type="text" name="nick" placeholder="Twój nick"/>
                        <textarea name="contents" placeholder="Twój komentarz"></textarea>
                        <div class="btn-content spaceup spacedown animfadeInUp" data-time="1200" role="button">Wyślij</div>
                    </form>
                    <br/>
                    <br/>
                    <br/>
                    @foreach($daily_blog->comments as $comment)
                        <div class="comment">
                            <p class="name">{{ $comment->nick }}</p>
                            <p class="date">{{ $comment->date }}</p>
                            <p class="content">{{ $comment->contents }}</p>
                        </div>
                    @endforeach
                </div>
            </div>


            <!-- Discover end -->
        </div><!-- row end -->
    </div>
@endsection

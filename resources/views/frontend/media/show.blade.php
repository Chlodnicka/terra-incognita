@extends('layouts.layout')

@section('title', 'Aktualności')

@section('content')
    <h1>{{ $news->title }}</h1>
    <p class="date">{{ $news->date }}</p>
    <p class="lead">{{ $news->lead }}</p>
    <img src="{{ asset($news->ico) }}" />
    <div class="text">{{ $news->text }}</div>
    <div class="comments">
        <div class="comments-form-container">

        </div>
        <div class="comments-container">
            @foreach($news->comments as $comment)
                <div class="comments-item">
                    <p class="nick">{{ $comment->nick }}</p>
                    <p class="date">{{ $comment->date }}</p>
                    <p class="content">{{ $comment->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
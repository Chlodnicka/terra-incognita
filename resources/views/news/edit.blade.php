@extends('layout')

@section('title', 'Aktualności')

@section('content')

    <h1>Aktualności</h1>

    @foreach($news as $item)
        <h2>{{ $item->title }}</h2>
        <p class="lead">{{ $item->lead }}</p>
        {{  link_to_route('news.show', $title = null, $parameters = ['id' => $item->id], $attributes = []) }}
    @endforeach
@endsection
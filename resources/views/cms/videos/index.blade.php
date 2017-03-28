@extends('layouts.cms-layout')

@section('title', 'Galeria video')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Galeria video</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="/video/add"><i class="fa fa-plus"></i> Dodaj nowy</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <p class="text-muted font-13 m-b-30">
                    Video - opis
                </p>
                @if(count($videos) > 0)
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                           cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Tytuł</th>
                            <th>Zajawka</th>
                            <th>Link do video</th>
                            <th>Obrazek główny</th>
                            <th>Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($videos as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->lead }}</td>
                                <td>{{ $item->link_to_video }}</td>
                                <td>{{ $item->ico }}</td>
                                <td><a href="video/{{ $item->id }}">Edytuj</a> <a href="video/delete/{{ $item->id }}">Usuń</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
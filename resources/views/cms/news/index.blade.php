@extends('layouts.cms-layout')

@section('title', 'Aktualności')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Aktualności</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="/news/add"><i class="fa fa-plus"></i> Dodaj nową</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <p class="text-muted font-13 m-b-30">
                    Aktualności - opis
                </p>
                @if(count($news) > 0)
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                           cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Tytuł</th>
                            <th>Zajawka</th>
                            <th>Obrazek główny</th>
                            <th>Data</th>
                            <th>Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->lead }}</td>
                                <td>{{ $item->ico }}</td>
                                <td>{{ $item->date }}</td>
                                <td><a href="news/{{ $item->id }}">Edytuj</a> <a href="news/delete/{{ $item->id }}">Usuń</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
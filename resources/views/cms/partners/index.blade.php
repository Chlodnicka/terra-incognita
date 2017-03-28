@extends('layouts.cms-layout')

@section('title', 'Partnerzy')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Partnerzy</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="/partners/add"><i class="fa fa-plus"></i> Dodaj nowy</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <p class="text-muted font-13 m-b-30">
                    Partnerzy - opis
                </p>
                @if(count($partners) > 0)
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                           cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Nazwa</th>
                            <th>Link do serwisu</th>
                            <th>Obrazek główny</th>
                            <th>Akcje</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($partners as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->link_to_site }}</td>
                                <td>{{ $item->ico }}</td>
                                <td><a href="partners/{{ $item->id }}">Edytuj</a> <a href="partners/delete/{{ $item->id }}">Usuń</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
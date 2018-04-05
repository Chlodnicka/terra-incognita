@extends('layouts.cms-layout')

@section('title', 'Wyprawy')

@section('content')
    <div class="">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{  $expedition->title }} - Blog</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="close-link" href="/expeditions"><i class="fa fa-arrow-left"></i> Wróć</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation"><a href="/expedition/{{  $expedition->id }}">Home</a>
                            </li>
                            @foreach($expedition->sections as $expedition_section)
                                <li role="presentation"><a
                                            href="/expedition/section/{{ $expedition_section->id }}">{{ $sections[$expedition_section->type] }}</a>
                                </li>
                            @endforeach
                            <li role="presentation" class="active"><a href="/daily_blog/{{  $expedition->id }}">Blog</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a href="/daily_blog/add/{{ $expedition->id }}"><i class="fa fa-plus"></i> Dodaj nową</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <div id="myTabContent" class="tab-content">


                            <div role="tabpanel" class="tab-pane active fade in" id=""
                                 aria-labelledby="profile-tab">

                                <table id="datatable-responsive"
                                       class="table table-striped table-bordered dt-responsive nowrap"
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
                                    @if(count($dailyBlog) > 0)
                                        @foreach($dailyBlog as $item)
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->lead }}</td>
                                                <td>{{ $item->ico }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td><a href="/daily_blog/edit/{{ $item->id }}">Edytuj</a> <a
                                                            href="/daily_blog/delete/{{ $item->id }}">Usuń</a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>Brak wpisów, dodaj nowy</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
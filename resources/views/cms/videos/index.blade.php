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
                <form method="post" action="backgrounds/4">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Zdjęcie w tle</label>
                        <input type="hidden" value="{{ $background->ico }}"/>
                        <input type="hidden" name="type" value="support"/>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="input-group">
                                               <span class="input-group-btn">
                                                 <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                    class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Wybierz
                                                 </a>
                                               </span>
                                <input id="thumbnail" class="form-control" type="text" name="ico">
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;"
                                 src="{{ $background->ico }}">
                        </div>
                    </div>
                    <div class="">
                        <button type="submit">Zapisz</button>
                    </div>
                </form>
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
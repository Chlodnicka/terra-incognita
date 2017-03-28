@extends('layouts.cms-layout')

@section('title', 'Dodaj video')

@section('content')

    <div class="">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_name">
                    <h2>Dodaj video</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="close-link" href="/video"><i class="fa fa-arrow-left"></i> Wróć</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form class="form-horizontal form-label-left" method="post" action="/video/add"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @foreach ($errors->all() as $error)
                            <p class="error">{{ $error }}</p>
                        @endforeach
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tytuł</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="title" id="title" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zajawka</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="lead" id="lead" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link do video</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="link_to_video" id="link_to_video" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zdjęcie główne</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">

                                <input type="file" class="form-control" name="ico" id="ico">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <a href="/videos" class="btn btn-primary">Cancel</a>
                                <input type="submit" class="btn btn-success" value="Wyślij"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
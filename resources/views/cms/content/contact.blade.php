@extends('layouts.cms-layout')

@section('title', 'Skontaktuj się z nami')

@section('content')

    <div class="">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_name">
                    <h2>Kontakt</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="close-link" href="/"><i class="fa fa-arrow-left"></i> Wróć</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>

                    <form class="form-horizontal form-label-left" method="post" action="/contact"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @foreach ($errors->all() as $error)
                            <p class="error">{{ $error }}</p>
                        @endforeach
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zajawka</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="lead" id="lead"
                                       value="{{ $content->lead }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zdjęcie główne</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="input-group">
                           <span class="input-group-btn">
                             <a id= "lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                               <i class="fa fa-picture-o"></i> Wybierz
                             </a>
                           </span>
                                    <input id="thumbnail" class="form-control" type="text" name="string_1">
                                </div>
                                @if(!empty( $content->string_1))
                                    <img id="holder" style="margin-top:15px;max-height:100px;"
                                         src="{{ $content->string_1 }}">
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Dane osobowe</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="string_2" id="string_2"
                                       value="{{ $content->string_2 }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="string_3" id="string_3"
                                       value="{{ $content->string_3 }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="long_string_1" id="long_string_1"
                                       value="{{ $content->long_string_1 }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tekst główny</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea cols="50" id="text" name="text" placeholder=""
                                          rows="4">{!! $content->text !!}</textarea>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <a href="/" class="btn btn-primary">Anuluj</a>
                                <input type="submit" class="btn btn-success" value="Wyślij"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script>
    <script src="assets/js/map.js" type="text/javascript"></script>
@endsection
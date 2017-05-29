@extends('layouts.cms-layout')

@section('title',  $expedition->title . ' | Wyprawy')

@section('content')

    <div class="">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ $expedition->title }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="close-link" href="/expeditions"><i class="fa fa-arrow-left"></i> Wróć</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#maindata" id="home-tab" role="tab"
                                                                      data-toggle="tab" aria-expanded="false">Home</a>
                            </li>
                            @foreach($expedition->sections as $expedition_section)
                                <li role="presentation" class=""><a href="/expedition/section/{{ $expedition_section->id }}">{{ $sections[$expedition_section->type] }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="maindata"
                                 aria-labelledby="home-tab">
                                <form class="form-horizontal form-label-left" method="post"
                                      action="/expedition/{{ $expedition->id }}"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @foreach ($errors->all() as $error)
                                        <p class="error">{{ $error }}</p>
                                    @endforeach
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tytuł</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="title" id="title"
                                                   value="{{ $expedition->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Zajawka</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="lead" id="lead"
                                                   value="{{ $expedition->lead }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Czy wyprawa ma być pokazywana na głównej stronie?</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="radio" name="is_main_expedition" value="1" @if($expedition->is_main_expedition == 1) checked="checked" @endif > tak<br>
                                            <input type="radio" name="is_main_expedition" value="2" @if($expedition->is_main_expedition == 2) checked="checked" @endif> nie<br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Data</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="datetime" class="form-control datepicker" name="date" id="date"
                                                   value="{{ $expedition->date }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Zdjęcie główne</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="input-group">
                                               <span class="input-group-btn">
                                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Wybierz
                                                 </a>
                                               </span>
                                                <input id="thumbnail" class="form-control" type="text" name="ico">
                                            </div>
                                            <img id="holder" style="margin-top:15px;max-height:100px;"
                                                 src="{{ $expedition->ico }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Wybierz dodatkowe
                                            sekcje</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            {!! Form::select('sections[]', $sections, $expedition->sections->pluck('type')->toArray(), ['class' => 'form-control','multiple' => 'multiple']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Link do video</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="link_to_video"
                                                   id="link_to_video"
                                                   value="{{ $expedition->link_to_video }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Treść<span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="text" id="text"
                                          rows="3">{!! $expedition->text !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                            <a href="/expeditions" class="btn btn-primary">Anuluj</a>
                                            <input type="submit" class="btn btn-success" value="Wyślij"/>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            @foreach($expedition->sections as $expedition_section)
                                <div role="tabpanel" class="tab-pane fade" id="{{ $expedition_section->type }}"
                                     aria-labelledby="profile-tab">
                                    <form  class="form-horizontal form-label-left"  action="expedition_section/{{$expedition_section->id}}" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tytuł</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" name="lead" id="lead"
                                                       value="{{ $expedition_section->title }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zajawka</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" name="lead" id="lead"
                                                       value="{{ $expedition_section->lead }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zdjęcie główne</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="input-group">
                                               <span class="input-group-btn">
                                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Wybierz
                                                 </a>
                                               </span>
                                                    <input id="thumbnail" class="form-control" type="text" name="ico">
                                                </div>
                                                <img id="holder" style="margin-top:15px;max-height:100px;"
                                                     src="{{ $expedition_section->ico }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Treść<span
                                                        class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="text" id="text"
                                          rows="3">{!! $expedition_section->text !!}</textarea>
                                            </div>
                                        </div>                                    </form>
                                </div>
                            @endforeach


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
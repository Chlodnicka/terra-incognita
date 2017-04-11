@extends('layouts.cms-layout')

@section('title',  $section->expedition->title . ' | Wyprawy')

@section('content')

    <div class="">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{  $section->expedition->title }} {{ $section->title }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="close-link" href="/expeditions"><i class="fa fa-arrow-left"></i> Wróć</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation"><a href="/expedition/{{  $section->expedition->id }}" >Home</a>
                            </li>
                            @foreach($expedition->sections as $expedition_section)
                                <li role="presentation" @if($expedition_section->id == $section->id) class="active" @endif><a href="/expedition/section/{{ $expedition_section->id }}">{{ $sections[$expedition_section->type] }}</a>
                                </li>
                            @endforeach
                        </ul>

                        <div id="myTabContent" class="tab-content">


                                <div role="tabpanel" class="tab-pane active fade in" id="{{ $section->type }}"
                                     aria-labelledby="profile-tab">
                                    <form class="form-horizontal form-label-left"
                                          action="expedition_section/{{$section->id}}" method="post"
                                          enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tytuł</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" name="lead" id="lead"
                                                       value="{{ $section->title }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zajawka</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" name="lead" id="lead"
                                                       value="{{ $section->lead }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zdjęcie
                                                główne</label>
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
                                                     src="{{ $section->ico }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Treść<span
                                                        class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="text" id="text"
                                          rows="3">{!! $section->text !!}</textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
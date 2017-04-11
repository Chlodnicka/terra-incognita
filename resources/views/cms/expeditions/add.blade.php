@extends('layouts.cms-layout')

@section('title', 'Dodawanie nowej wyprawy | Wyprawy')

@section('content')

    <div class="">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Stwórz nową wyprawę</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="close-link" href="/news"><i class="fa fa-arrow-left"></i> Wróć</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br/>
                    <form class="form-horizontal form-label-left" method="post" action="/expedition/add"
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Data</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="datetime" class="form-control" name="date" id="date" value="">
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
                                <img id="holder" style="margin-top:15px;max-height:100px"
                                     src="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Wybierz dodatkowe sekcje</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="select2_multiple form-control" multiple="multiple" name="sections[]">
                                    <option value="equipment">Sprzęt</option>
                                    <option value="organization">Organizacja</option>
                                    <option value="gallery">Galeria</option>
                                    <option value="description">Opis i parametry</option>
                                    <option value="advices">Porady</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Link do video</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="link_to_video" id="link_to_video" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Treść<span
                                        class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="form-control" name="text" id="text" rows="3"></textarea>
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
            </div>
        </div>
    </div>

@endsection
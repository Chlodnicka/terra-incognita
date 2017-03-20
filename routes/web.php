<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['domain' => 'terraincognita.local'], function () {

    Route::get('/', 'Frontend\HomeController@index')->name('home');

    Route::get('aktualnosci/{id}', 'Frontend\NewsController@show')->name('news.show');
    Route::get('aktualnosci/{id}/', 'Frontend\NewsController@show');
    Route::get('aktualnosci/index', 'Frontend\NewsController@index');
    Route::get('aktualnosci/index/', 'Frontend\NewsController@index');
    Route::get('aktualnosci', 'Frontend\NewsController@index')->name('news.index');
    Route::get('aktualnosci/', 'Frontend\NewsController@index');


    Route::get('my', 'Frontend\ContentController@we')->name('content.we');
    Route::get('w-mediach', 'Frontend\MediaController@show')->name('media.index');
    Route::get('partnerzy-i-sponsorzy', 'Frontend\PartnersController@index')->name('partners.index');
    Route::get('wesprzyj-nas', 'Frontend\ContentController@support')->name('content.support');
    Route::get('kontakt', 'Frontend\ContentController@contact')->name('content.contact');


    Route::get('wyprawy/{id}', 'Frontend\VentureController@show')->name('venture.show');
    Route::get('wyprawy/{id}/', 'Frontend\VentureController@show');
    Route::get('wyprawy/index', 'Frontend\VentureController@index');
    Route::get('wyprawy/index/', 'Frontend\VentureController@index');
    Route::get('nasze-wyprawy', 'Frontend\VentureController@index')->name('venture.index');
    Route::get('wyprawy/', 'Frontend\VentureController@index');
});

Route::group(['domain' => 'cms.terraincognita.local'], function () {
    Auth::routes();
    Route::get('/', 'CmsController@index')->name('dashboard');

    Route::get('/news', 'Cms\NewsController@index')->name('news');
    Route::get('/news/{id}', 'Cms\NewsController@edit')->name('news.edit');
    Route::post('/news/{id}', 'Cms\NewsController@edit')->name('news.update');
    Route::get('/news/add', 'Cms\NewsController@add')->name('news.add');
    Route::post('/news/add', 'Cms\NewsController@add')->name('news.create');
    Route::post('/news/delete/{id}', 'Cms\NewsController@delete')->name('news.delete');

    Route::get('/partners', 'Cms\PartnersController@index')->name('partners');
    Route::get('/partners/{id}', 'Cms\PartnersController@edit')->name('partners.edit');
    Route::get('/partners/add', 'Cms\PartnersController@add')->name('partners.add');

    Route::get('/video', 'Cms\VideoController@index')->name('video');
    Route::get('/video/{id}', 'Cms\VideoController@edit')->name('video.edit');
    Route::get('/video/add', 'Cms\VideoController@add')->name('video.add');

    Route::get('/media', 'Cms\MediaController@index')->name('media');
    Route::get('/media/{id}', 'Cms\MediaController@edit')->name('media.edit');
    Route::get('/media/add', 'Cms\MediaController@add')->name('media.add');

    Route::get('/multimedia', 'Cms\MultimediaController@index')->name('multimedia');
    Route::get('/multimedia/{id}', 'Cms\MultimediaController@index')->name('multimedia.edit');
    Route::get('/multimedia/add', 'Cms\MultimediaController@add')->name('multimedia.add');

    Route::get('/expeditions', 'Cms\PartnersController@index')->name('expeditions');
    Route::get('/expeditions/{id}', 'Cms\PartnersController@index')->name('expeditions.edit');
    Route::get('/expeditions/add', 'Cms\PartnersController@add')->name('expeditions.add');

    Route::get('/expeditions/{id}/sections', 'Cms\ExpeditionSectionsController@index')->name('sections');
    Route::get('/expeditions/sections/{id}', 'Cms\ExpeditionSectionsController@edit')->name('sections.edit');
    Route::get('/expeditions/{id}/sections/add', 'Cms\ExpeditionSectionsController@add')->name('sections.add');

    Route::get('/', 'CmsController@index')->name('dashboard');

});




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
Route::group(['domain' => 'terraprojekt.com.pl'], function () {

Route::get('/', 'Frontend\HomeController@index')->name('home');


Route::get('aktualnosci/index', 'Frontend\NewsController@index');
Route::get('aktualnosci/index/', 'Frontend\NewsController@index');
Route::get('aktualnosci', 'Frontend\NewsController@index')->name('news.index');
Route::get('aktualnosci/', 'Frontend\NewsController@index');
Route::post('aktualnosci/dodaj_komentarz/{id}', 'Frontend\NewsController@addComment')->name('news.show');
Route::get('aktualnosci/{id}', 'Frontend\NewsController@show')->name('news.show');
Route::get('aktualnosci/{id}/', 'Frontend\NewsController@show');

Route::get('/galeria-video', 'Frontend\VideoController@index');

Route::get('/o-nas', 'Frontend\ContentController@we')->name('content.we');
Route::get('w-mediach', 'Frontend\ContentController@media')->name('media.index');
Route::get('partnerzy-i-sponsorzy', 'Frontend\PartnersController@index')->name('partners.index');
Route::get('wesprzyj-nas', 'Frontend\ContentController@support')->name('content.support');
Route::get('kontakt', 'Frontend\ContentController@contact')->name('content.contact');
Route::post('/wyslij-mail', 'Frontend\ContentController@contactSend');

Route::get('wyprawy/index', 'Frontend\ExpeditionController@index');
Route::get('wyprawy/index/', 'Frontend\ExpeditionController@index');
Route::get('nasze-wyprawy', 'Frontend\ExpeditionController@index')->name('venture.index');
Route::get('wyprawy/', 'Frontend\ExpeditionController@index');
Route::get('wyprawa/sekcja/{id}', 'Frontend\ExpeditionSectionsController@show');
Route::get('wyprawy/{id}', 'Frontend\ExpeditionController@show')->name('venture.show');
Route::get('wyprawy/{id}/', 'Frontend\ExpeditionController@show');
Route::get('wyprawa/dziennik/{id}', 'Frontend\DailyBlogController@index');
Route::get('wyprawa/wpis/{id}', 'Frontend\DailyBlogController@show');
Route::post('dziennik_wyprawy/dodaj_komentarz/{id}', 'Frontend\DailyBlogController@addComment')->name('blog.show');

});

Route::group(['domain' => 'cms.terraprojekt.com.pl'], function () {
Auth::routes();

Route::get('/cms', 'CmsController@index')->name('dashboard');

Route::get('/news', 'Cms\NewsController@index')->name('news');
Route::get('/news/add', 'Cms\NewsController@add')->name('news.add');
Route::post('/news/add', 'Cms\NewsController@create')->name('news.create');
Route::get('/news/delete/{id}', 'Cms\NewsController@destroy')->name('news.destroy');
Route::get('/news/{id}', 'Cms\NewsController@edit')->name('news.edit');
Route::post('/news/{id}', 'Cms\NewsController@update')->name('news.update');

Route::get('/partners', 'Cms\PartnersController@index')->name('partners');
Route::get('/partners/add', 'Cms\PartnersController@add')->name('partners.add');
Route::post('/partners/add', 'Cms\PartnersController@create')->name('partners.create');
Route::get('/partners/{id}', 'Cms\PartnersController@edit')->name('partners.edit');
Route::post('/partners/{id}', 'Cms\PartnersController@update')->name('partners.update');
Route::get('/partners/delete/{id}', 'Cms\PartnersController@destroy')->name('partners.destroy');

Route::get('/video', 'Cms\VideoController@index')->name('video');
Route::get('/video/add', 'Cms\VideoController@add')->name('video.add');
Route::post('/video/add', 'Cms\VideoController@create')->name('video.create');
Route::get('/video/{id}', 'Cms\VideoController@edit')->name('video.edit');
Route::post('/video/{id}', 'Cms\VideoController@update')->name('video.update');
Route::get('/video/delete/{id}', 'Cms\VideoController@destroy')->name('video.destroy');


Route::get('/multimedia', 'Cms\MultimediaController@index')->name('multimedia');
Route::get('/multimedia/{id}', 'Cms\MultimediaController@index')->name('multimedia.edit');
Route::get('/multimedia/add', 'Cms\MultimediaController@add')->name('multimedia.add');

Route::get('/expeditions', 'Cms\ExpeditionController@index')->name('expeditions');
Route::get('/expedition/add', 'Cms\ExpeditionController@add')->name('expeditions.add');
Route::post('/expedition/add', 'Cms\ExpeditionController@create')->name('expeditions.create');
Route::get('/expedition/{id}', 'Cms\ExpeditionController@edit')->name('expeditions.edit');
Route::post('/expedition/{id}', 'Cms\ExpeditionController@update')->name('expeditions.update');
Route::get('/expedition/{id}/', 'Cms\ExpeditionController@edit');

Route::get('/daily_blog/add/{id}', 'Cms\DailyBlogController@add');
Route::post('/daily_blog/create/{id}', 'Cms\DailyBlogController@create');
Route::get('/daily_blog/edit/{id}/', 'Cms\DailyBlogController@edit');
Route::post('/daily_blog/update/{id}/', 'Cms\DailyBlogController@update');
Route::get('/daily_blog/{id}/', 'Cms\DailyBlogController@index');

Route::post('/backgrounds/{id}', 'Cms\BackgroundController@update')->name('background.update');

Route::get('/expedition/section/{id}', 'Cms\ExpeditionSectionController@edit')->name('sections.edit');
Route::post('/expedition/section/{id}', 'Cms\ExpeditionSectionController@update')->name('sections.update');

Route::get('/support', 'Cms\ContentController@support')->name('support');
Route::post('/support', 'Cms\ContentController@supportUpdate')->name('support.update');

Route::get('/about-us', 'Cms\ContentController@we')->name('we');
Route::post('/about-us', 'Cms\ContentController@weUpdate')->name('we.update');

Route::get('/contact', 'Cms\ContentController@contact')->name('contact');
Route::post('/contact', 'Cms\ContentController@contactUpdate')->name('contact.update');

Route::get('/media', 'Cms\ContentController@media')->name('media');
Route::post('/media', 'Cms\ContentController@mediaUpdate')->name('media.update');

Route::get('/', 'Cms\CmsController@index')->name('dashboard');


});

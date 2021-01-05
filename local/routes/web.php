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

// Route::get('/', function () {
//     return view('theme.index');
// });

Route::group(['middleware' => ['web']], function(){
	Route::get('/', 'Theme\ThemeController@index');

	Route::get('/company-overview', 'Theme\ThemeController@company_overview');
	Route::get('/mission-vision', 'Theme\ThemeController@mission_vision');
	Route::get('/chairman-message', 'Theme\ThemeController@chairman_message');
	Route::get('/team', 'Theme\ThemeController@team');

	Route::get('/reports', 'Theme\ThemeController@reports');

	Route::get('/news-event', 'Theme\ThemeController@news_event');
	Route::get('/news-event/{slug}', 'Theme\ThemeController@news_event_view');

	Route::get('/photo-gallery', 'Theme\ThemeController@photo_gallery');

	Route::get('/video-gallery', 'Theme\ThemeController@video_gallery');

	Route::get('/contact', 'Theme\ThemeController@contact');
	
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>['auth']], function(){
	// admin routes

});



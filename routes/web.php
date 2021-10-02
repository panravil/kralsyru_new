<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'web'], function () {
	Route::get('/', 'HomeController@index');
	Route::get('/parovani-syry/{url}', 'CheeseController@index');
	Route::get('/parovani-vina/{url}', 'WineController@index');
	Route::get('/nase-syry', 'OurcheeseController@index');

	Route::get('/nase-syry/{url}', 'ViewcheeseController@index');

	Route::get('/syry-a-vino', 'CheesewineController@index');

	Route::get('/hermelin', function () {
		return view('pages.hermelin');
	});
	Route::get('/pece-o-syry', 'CheesecareController@index');

	Route::get('/pribeh-krale', function () {
		return view('pages.storyking');
	});
	Route::get('/nas-pribeh', function () {
		return view('pages.story95');
	});
	Route::get('/95-vyroci', function () {
		return view('pages.story95');
	});

	// Route::get('/jak-chutna-laska', function() {
	//     return view('pages.love-taste');
	// });

	Route::get('/dozral-cas-na-lasku', function () {
		return view('pages.love-time');
	});

	Route::get('/leto-kralovskych-zazitku', function () {
		return view('pages.summer-experiences');
	});

	Route::get('/kontakt', 'ContactController@index');
	Route::post('/kontakt', 'ContactController@sendForm');
});


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();
	Route::get('/hlavni-fotografie', 'CustomVoyagerController@mainPhotos')->middleware('admin.user');
	Route::POST('/save-hlavni-fotografie', 'CustomVoyagerController@saveMainPhotos')->middleware('admin.user');
	Route::get('/delete-hlavni-fotografie', 'CustomVoyagerController@deleteMainPhotos')->middleware('admin.user');
	Route::POST('/change-hlavni-fotografie', 'CustomVoyagerController@changeMainPhotos')->middleware('admin.user');

	Route::get('/profil-fotografie', 'CustomVoyagerController@profilePhotos')->middleware('admin.user');
	Route::POST('/save-profil-fotografie', 'CustomVoyagerController@saveProfilePhotos')->middleware('admin.user');
	Route::get('/delete-profil-fotografie', 'CustomVoyagerController@deleteProfilePhotos')->middleware('admin.user');
	Route::POST('/change-profil-fotografie', 'CustomVoyagerController@changeProfilePhotos')->middleware('admin.user');

	Route::get('/baleni-fotografie', 'CustomVoyagerController@baleniPhotos')->middleware('admin.user');
	Route::POST('/save-baleni-fotografie', 'CustomVoyagerController@saveBaleniPhotos')->middleware('admin.user');
	Route::get('/delete-baleni-fotografie', 'CustomVoyagerController@deleteBaleniPhotos')->middleware('admin.user');
	Route::POST('/change-baleni-fotografie', 'CustomVoyagerController@changeBaleniPhotos')->middleware('admin.user');

	Route::get('/nase-syry', 'CustomVoyagerController@ourCheese')->middleware('admin.user');
	Route::POST('/save-nase-syry', 'CustomVoyagerController@saveOurCheese')->middleware('admin.user');
});



Route::get('/clear-cache', function() {
	$exitCode = Artisan::call('cache:clear');
	// return what you want
});
	
Route::get('/clear-config', function() {
	$exitCode = Artisan::call('config:clear');
	// return what you want
});
	
Route::get('/config-cache', function() {
	$exitCode = Artisan::call('config:cache');
	// return what you want
});
	
Route::get('/optimize', function() {
	$exitCode = Artisan::call('optimize');
	// return what you want
});
		
Route::get('/route-clear', function() {
	$exitCode = Artisan::call('route:clear');
	// return what you want
});

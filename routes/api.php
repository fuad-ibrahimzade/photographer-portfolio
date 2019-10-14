<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    $factpryUsers=factory('App\User', 100)->make();
    $factpryPhotos=\App\Photo::paginate(10);
    $paginated = new Illuminate\Pagination\Paginator($factpryUsers, count($factpryUsers));


//    return $paginated;
    return \App\Http\Resources\PhotosResource::collection(\App\Photo::paginate(10));
});
Route::get('/homedata', 'HomeController@getHomeData');
Route::get('/photos', 'HomeController@getPhotosData');
Route::get('/about', 'HomeController@getAboutData');
Route::get('/gallery/{gallery?}', 'HomeController@getGalleryData')->where('gallery', '(.*)');


//Route::middleware('auth:api')->group(function () {
//    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//
//});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::delete('gallery/{gallery}/delete', 'DashboardController@destroyGallery');
Route::delete('photo/{photo}/delete', 'DashboardController@destroyPhoto');
Route::post('gallery/new', 'DashboardController@newGallery');
Route::post('photo/new', 'DashboardController@addPhoto');
//
Route::get('slide', 'DashboardController@slide');
Route::post('slide/new', 'DashboardController@addSlide');
Route::delete('slide/{slide}/delete', 'DashboardController@destroySlide');
//
Route::get('about/edit', 'DashboardController@about');
Route::post('about/update', 'DashboardController@updateAbout');
//
//Route::get('logo', 'DashboardController@logo');
Route::post('logo/update', 'DashboardController@updateLogo');
//
Route::get('link', 'DashboardController@link');
Route::post('link/update', 'DashboardController@updateLink');

<?php


//Route::get('/', 'HomeController@index');
//Route::get('about', 'HomeController@about');
//Route::get('contact', 'HomeController@contact');
//Route::get('gallery/{gallery?}', 'HomeController@gallery')->where('gallery', '(.*)');
//
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//
//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//Route::delete('gallery/{gallery}/delete', 'DashboardController@destroyGallery');
//Route::delete('photo/{photo}/delete', 'DashboardController@destroyPhoto');
//Route::post('gallery/new', 'DashboardController@newGallery');
//Route::post('photo/new', 'DashboardController@addPhoto');
//
//Route::get('slide', 'DashboardController@slide');
//Route::post('slide/new', 'DashboardController@addSlide');
//Route::delete('slide/{slide}/delete', 'DashboardController@destroySlide');
//
//Route::get('about/edit', 'DashboardController@about');
//Route::post('about/update', 'DashboardController@updateAbout');
//
//Route::get('logo', 'DashboardController@logo');
//Route::post('logo/update', 'DashboardController@updateLogo');
//
//Route::get('link', 'DashboardController@link');
//Route::post('link/update', 'DashboardController@updateLink');

Route::get('/{any}', 'HomeController@index')->where('any', '.*');
//Route::get('/', 'HomeController@index');
//Route::get('/{any}', function(){
//    return view('vueapp');
//})->where('any', '.*');

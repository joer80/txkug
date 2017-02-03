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

Route::get('/', 'WelcomeController@index')->name('welcome.index');

Route::get('/user', 'UserController@index')->name('user.index');

Route::get('/blog', 'BlogController@index')->name('blog.index');

Route::get('/social/redirect/{provider}', 'Auth\SocialController@getSocialRedirect')->name('social.redirect');
Route::get('/social/handle/{provider}', 'Auth\SocialController@getSocialHandle')->name('social.handle');

Route::group(['middleware' => 'auth:all'], function() {
    Route::get('/logout', 'Auth\LoginController@logout')->name('authenticated.logout');
    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'ActivateController@activate']);
    Route::get('/activate', ['as' => 'authenticated.activation-resend', 'uses' => 'ActivateController@resend']);
});

Auth::routes(['login' => 'auth.login', 'middleware' => 'auth:all']);

Route::group(['prefix' => 'user', 'middleware' => 'auth:all'], function() {
    Route::get('/', 'UserController@index')->name('user.home');
    Route::get('/meetings', 'UserController@events')->name('user.events');
});
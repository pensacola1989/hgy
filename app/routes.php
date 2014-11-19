<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('home');
});
Route::get('/test','HomeController@getShow');
Route::get('/page', 'HomeController@getPage');

Route::get('/user/login','AuthController@getLogin');
Route::post('/user/login', 'AuthController@login');
Route::get('/user/register', 'UserController@register');
Route::post('/user/register', 'UserController@add');



Route::group(['before'  =>  'auth'], function () {
    /*
     * Accounts
     */

    Route::get('/user/logout','AuthController@Logout');

    // dashboard
    Route::get('/user/index', 'UserController@index');

    /*
     * Activity
     */
    Route::get('/activity/show/{userid}', 'ActivityController@index');
    Route::get('/activity/new', 'ActivityController@new');
    Route::get('/activity/update', 'ActivityController@edit');
    Route::post('/activity/add', 'ActivityController@add');

});
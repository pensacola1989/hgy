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

Route::get('/seedACL', function() {
   $org = new Hgy\ACL\Role;
   $org->name = '公益组织';
   $org->save();

   $thirdPlatform = new Hgy\ACL\Role;
   $thirdPlatform->name = '第三方平台';
   $thirdPlatform->save();

   $platform = new Hgy\ACL\Role;
   $platform->name = '平台';
   $platform->save();

   $platformPermission = new Hgy\ACL\Permission;
   $platformPermission->name = 'manage_platform';
   $platformPermission->display_name = '平台权限';
   $platformPermission->save();

   $manageOrg = new Hgy\ACL\Permission;
   $manageOrg->name = 'manage_org';
   $manageOrg->display_name = '组织管理';
   $manageOrg->save();

   $manageVolunteer = new Hgy\ACL\Permission;
   $manageVolunteer->name = 'manage_volunteer';
   $manageVolunteer->display_name = '志愿者管理';
   $manageVolunteer->save();

   // $org->perms()->sync(array($manageVolunteer->id));
   // $platform->perms()->sync(array($platformPermission->id));
//
//    $u->perms()->sync(array($manageOrg->id,$manageUser->id));

    // return $u->hasRole('Owner') . '----' . $u->hasRole('Admin');
});
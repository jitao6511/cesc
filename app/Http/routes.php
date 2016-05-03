<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/** mobile **/
// mobile 所有get post都用此隐式控制器
Route::controller('mobile','MobileController');
// Route::post('mobile/register',['uses'=>'MobileController@register']);
/** mobile - end **/

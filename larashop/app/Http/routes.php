<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Here when we go to localhost/laravel/larashop/public/hello it returns hello world
/*Route::get('/hello',function(){
    return 'Hello World!';
});*/

//Here we call the hello.php file in app/http/controller/hello.php
Route::get('hello', 'Hello@index');

//Here we call hello.blade.php
Route::get('/hello/{name}', 'Hello@show');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

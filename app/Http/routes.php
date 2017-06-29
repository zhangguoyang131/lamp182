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

//专门指向后台
Route::get('/admin',function(){
	return redirect('/admin/login/login');
});

//登录页面操作
Route::controller('/admin/login','Admin\LoginController');

// 后台主页  操作
Route::controller('/admin/index','Admin\IndexController');

// 验证码的路由
Route::get('/code','CodeController@code');

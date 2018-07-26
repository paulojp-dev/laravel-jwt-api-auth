<?php

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//	return $request->user();
//});
//
//// Routes for user authentication
//Route::post('register', 'AuthController@register');
//Route::post('login', 'AuthController@login');
//Route::post('recover', 'AuthController@recover');
//Route::group(['middleware' => ['jwt.auth']], function () {
//	Route::get('logout', 'AuthController@logout');
//});

//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
//Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');

Route::get('/', function () {
	return response()->json(['message' => 'Jobs API', 'status' => 'Connected']);;
});

Route::resource('jobs', 'JobsController');
Route::resource('companies', 'CompaniesController');

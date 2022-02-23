<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





Route::group(['namespace' => 'Api\V1\User', 'prefix' => 'v1' , 'as' => 'api.'], function(){
	
	Route::get('users', 'ApiUserJsonController@fech_users')->name('users.fech_users');

});


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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::resource('adressInfo','adressInfo\adressInfoController');

Route::resource('occupant','occupant\occupantController');

Route::resource('owner','owner\ownerController');

Route::resource('ownership','ownership\ownershipController');

Route::resource('personInfo','personInfo\personInfoController');

Route::resource('photoInfo','photoInfo\photoInfoController');

Route::resource('rent','rent\rentController');

Route::resource('userInfo','userInfo\userInfoController');

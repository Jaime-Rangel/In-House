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

//Restriccion de api
//Route::resource('adressInfo','adressInfo\adressInfoController',['only'=>['index','show']]);

//adressInfo
Route::resource('adressInfo','adressInfo\adressInfoController');

//ownership
Route::resource('ownership','ownership\ownershipController');

//photoInfo
Route::resource('photoInfo','photoInfo\photoInfoController');

//rent
Route::resource('rent','rent\rentController');

//occupant
Route::resource('occupant','occupant\occupantController');

//owner
Route::resource('owner','owner\ownerController');

//userInfo
Route::resource('userInfo','userInfo\userInfoController');

//personInfo
Route::resource('personInfo','personInfo\personInfoController');

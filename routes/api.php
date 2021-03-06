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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/Register','CredentialsController@Register');
Route::post('/InsertWorkout','WorkoutsController@InsertWorkout');
Route::post('/Update/{Email}','CredentialsController@UpdateProfile');
Route::get('/Login/{Email}/{Pass}','CredentialsController@Login');
Route::get('/UserWorkouts/{Email}','WorkoutsController@FetchWorkouts');
Route::get('/Instructors','InstructorsController@Fetch');


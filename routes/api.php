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

Route::group(['prefix' => 'area'], function () {
    Route::get('/', 'AreaController@listAll');
    Route::get('/{$id}', 'AreaController@readOne');
    Route::post('/{$id}', 'AreaController@createOne');
    Route::put('/{$id}', 'AreaController@updateOne');
    Route::delete('/{$id}', 'AreaController@deleteOne');
});

Route::group(['prefix' => 'center'], function () {
    Route::get('/', 'CenterController@listAll');
    Route::get('/{$id}', 'CenterController@readOne');
    Route::post('/{$id}', 'CenterController@createOne');
    Route::put('/{$id}', 'CenterController@updateOne');
    Route::delete('/{$id}', 'CenterController@deleteOne');
});

Route::group(['prefix' => 'professor'], function () {
    Route::get('/', 'ProfessorController@listAll');
    Route::get('/{$id}', 'ProfessorController@readOne');
    Route::post('/{$id}', 'ProfessorController@createOne');
    Route::put('/{$id}', 'ProfessorController@updateOne');
    Route::delete('/{$id}', 'ProfessorController@deleteOne');
});

Route::group(['prefix' => 'class'], function () {
    Route::get('/', 'AcademicClassController@listAll');
    Route::get('/{$id}', 'AcademicClassController@readOne');
    Route::post('/{$id}', 'AcademicClassController@createOne');
    Route::put('/{$id}', 'AcademicClassController@updateOne');
    Route::delete('/{$id}', 'AcademicClassController@deleteOne');
});

Route::group(['prefix' => 'classroom'], function () {
    Route::get('/', 'ClassroomController@listAll');
    Route::get('/{$id}', 'ClassroomController@readOne');
    Route::post('/{$id}', 'ClassroomController@createOne');
    Route::put('/{$id}', 'ClassroomController@updateOne');
    Route::delete('/{$id}', 'ClassroomController@deleteOne');
});

Route::group(['prefix' => 'semester'], function () {
    Route::get('/', 'SchoolSemesterController@listAll');
    Route::get('/{$id}', 'SchoolSemesterController@readOne');
    Route::post('/{$id}', 'SchoolSemesterController@createOne');
    Route::put('/{$id}', 'SchoolSemesterController@updateOne');
    Route::delete('/{$id}', 'SchoolSemesterController@deleteOne');
});

Route::group(['prefix' => 'demand'], function () {
    Route::get('/', 'DemandController@listAll');
    Route::get('/{$id}', 'DemandController@readOne');
    Route::post('/{$id}', 'DemandController@createOne');
    Route::put('/{$id}', 'DemandController@updateOne');
    Route::delete('/{$id}', 'DemandController@deleteOne');
});

Route::group(['prefix' => 'discipline'], function () {
    Route::get('/', 'DisciplineController@listAll');
    Route::get('/{$id}', 'DisciplineController@readOne');
    Route::post('/{$id}', 'DisciplineController@createOne');
    Route::put('/{$id}', 'DisciplineController@updateOne');
    Route::delete('/{$id}', 'DisciplineController@deleteOne');
});
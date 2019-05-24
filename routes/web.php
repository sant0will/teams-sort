
<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
return view('welcome');
});

Route::get('/games','FirebaseController@index');
Route::get('/games/{id}/edit','FirebaseController@edit');
Route::get('/games/{id}','FirebaseController@show');
Route::get('/games/create','FirebaseController@create');
Route::post('/games','FirebaseController@save');
Route::patch('/games/update/{id}','FirebaseController@show');
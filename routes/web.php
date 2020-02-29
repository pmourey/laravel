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


/*Route::get('/', ['as' => 'home', function()
{
  return 'Je suis la page d\'accueil !';
}]);*/

//app('router')->get('/', function() {   return 'Je suis opào la page d\'accueil !'; });


Route::get('infos', function()
{
    return view('infos');
});			

Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
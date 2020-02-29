<?php 
Route::get('/', function () {
    return view('welcome');
});

Route::get('{n}', function($n) {
	return 'Je suis la page ' . $n . ' !'; 
});


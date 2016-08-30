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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('blog','PagesController@index');

// Reads an item
Route::get('test',function(){
	echo '<form action="test" method="post">';
	echo '<input type="submit" value="submit" />';
	echo '<input type="hidden" name="_token" value="'. csrf_token() .'" />';
	echo '<input type="hidden" name="_method" value="DELETE" />';
	echo '</form>';
});

// Creates an item
Route::post('test',function(){
	echo "This is a POST Request";
});

// Updates an item
Route::put('test',function(){
	echo "This is a PUT Request";
});

// Deletes an item
Route::delete('test',function(){
	echo "This is a DELETE Request";
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

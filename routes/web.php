<?php

Auth::routes();

Route::get('/profiles/{id}', 'ProfileController@profile');

Route::get('/threads', 'ThreadsController@index');

Route::get('/threads/create', 'ThreadsController@create');

Route::get('/threads/{id}', 'ThreadsController@show');


/*Route::get('/', 'GreetingsController@show');*/

/*Route::get('/greeting/{id}/{count}', function($id, $count) {
	return view('messages.greeting', compact("id", "count"));
})->where(['id' => '[0-9]+', 'count' => '[0-9]+']);*/
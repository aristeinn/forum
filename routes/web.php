<?php

Auth::routes();

Route::get('/profiles/{id}', 'ProfileController@profile');

Route::get('/', function() {
	return redirect('/threads');
});

Route::get('/threads', 'ThreadsController@index');

Route::post('/threads', 'ThreadsController@store');

Route::get('/threads/create', 'ThreadsController@create');

Route::get('/threads/{id}', 'ThreadsController@show');


/*Route::get('/', 'GreetingsController@show');*/

/*Route::get('/greeting/{id}/{count}', function($id, $count) {
	return view('messages.greeting', compact("id", "count"));
})->where(['id' => '[0-9]+', 'count' => '[0-9]+']);*/
<?php

Route::get('/', 'HomeController@index');

Route::resource('photos', 'PhotosController', [
	'only' => ['index', 'show']
]);

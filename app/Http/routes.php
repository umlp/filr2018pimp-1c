<?php

Route::get('/', 'ListController@show');
Route::auth();
Route::get('/home', 'HomeController@index');
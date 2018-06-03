<?php

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('welcome');
});
Route::get('connexion', function () {
    return view('connexion/connexion');
});
Route::get('inscription', function () {
    return view('inscription/inscription');
});
Route::get('home', function () {
    return view('home/home');
});
Route::get('home/agenda', function () {
    return view('agenda/agenda');
});
Route::get('home/evenement', function () {
    return view('evenement/evenement');
});
Route::get('/login', function () {
});
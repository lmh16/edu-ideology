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
use Jenssegers\Agent\Agent;

Route::get('/', function () {
    $agent = new Agent();
    if($agent->isMobile())
        return view('welcome');
    else
        return view('forbidden');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/submit', 'FormController@submit');

Route::get('/view', function () {
    return view('view');
});
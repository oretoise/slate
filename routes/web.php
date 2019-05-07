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

# TODO: Change this to home view.
Route::get('/', function () {
    return view('welcome');
});

Route::get('/{program}', function($program) {
    $view = '/programs/' . $program . '/home' ;
    return view($view)->with('test', $program);
});

Route::get('/{program}/{day}', function($program, $day) {
    $view = '/programs/' . $program . '/' . $day;
    return view($view);
});

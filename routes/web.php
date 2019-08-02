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
    return view('home')->with('program', 'home');
});

Route::get('/{program}', function($program) {
    $view = '/programs/' . $program . '/home';
    return view($view)->with('program', $program);
});

Route::get('/compile_plan/{program}', 'MJML@compile_plan');
Route::get('/comp/{program}/{day}', 'MJML@compiled');
Route::get('/{program}/{day}', function($program, $day) {
    if ($program == 'geosciences') {
        $view = '/programs/geosciences/' . $day . '/home';
        $program = 'geosciences/' . $day;
    } else {
        $view = '/programs/' . $program . '/' . $day;
    }
    return view($view)->with('program', $program);
});

Route::get('/geosciences/{program}/{day}', function($program, $day) {
    $view = '/programs/geosciences/' . $program . '/' . $day;
    $program = 'geosciences/' . $program;
    return view($view)->with('program', $program);
});

// MJML Development Routing
Route::get('/dev/{program}/{day}', 'MJML@dev_view');

Route::get('/compile/{program}/{day}', 'MJML@compile_view');

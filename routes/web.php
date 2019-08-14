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

// Homepage. Currently on dev view. TODO: Switch to compiled.
Route::get('/', 'MJML@dev_view');

// Listing (needs revisions)
Route::get('/listing', 'MJML@listing');

// Compiled program views.
Route::get('/{program}', function($program) {
    $view = '/_compiled/' . $program . '/home';
    return view($view)->with('program', $program);
});
Route::get('/{program}/{day}', function($program, $day) {
    if ($program == 'geosciences') {
        $view = '/_compiled/geosciences/' . $day . '/home';
        $program = 'geosciences/' . $day;
    } else {
        $view = '/_compiled/' . $program . '/' . $day;
    }
    return view($view)->with('program', $program);
});

Route::get('/geosciences/{program}/{day}', function($program, $day) {
    $view = '/_compiled/geosciences/' . $program . '/' . $day;
    $program = 'geosciences/' . $program;
    return view($view)->with('program', $program);
});





// Dev program view.
Route::get('/dev/geosciences/{program}', 'MJML@dev_view');
Route::get('/dev/{program}', 'MJML@dev_view');
Route::get('/dev/geosciences/{program}/{day}', 'MJML@dev_view');
Route::get('/dev/{program}/{day}', 'MJML@dev_view');

// Compiled program view.
Route::get('/geosciences/{program}', 'MJML@compiled');


// Compiled program/day view.
Route::get('/geosciences/{program}/{day}', 'MJML@compiled');
Route::get('/{program}/{day}', 'MJML@compiled');






// TODO: Remove this, but for now it catches anything else.
Route::get('/{program}', function($program) {
    $view = '/programs/' . $program . '/home';
    return view($view)->with('program', $program);
});

Route::get('/compile_plan/{program}', 'MJML@compile_plan')->name("comp_plan");
Route::get('/comp/{program}/{day}', 'MJML@compiled');


// MJML Development Routing


Route::get('/compile/{program}/{day}', 'MJML@compile_view');

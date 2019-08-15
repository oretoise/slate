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

// Compile Route

// Dev && Geosciences
Route::get('/dev/geosciences/{program}', 'MJML@dev_view');
Route::get('/dev/geosciences/{program}/{day}', 'MJML@dev_view');

// Dev
Route::get('/dev/{program}', 'MJML@dev_view');
Route::get('/dev/{program}/{day}', 'MJML@dev_view');

// Compiled && Geosciences
Route::get('/geosciences/{program}', 'MJML@compiled');
Route::get('/geosciences/{program}/{day}', 'MJML@compiled');

// Compiled
Route::get('/{program}', 'MJML@compiled');
Route::get('/{program}/{day}', 'MJML@compiled');
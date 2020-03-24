<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/vote/login', function () {
    return view('login');
});

Route::post('/vote/login', function (Request $request) {
    $request->validate([
        'password' => 'required',
    ]);
    return $request;
});

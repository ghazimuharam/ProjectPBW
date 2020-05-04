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

Route::get('/vote/login', 'VoteController@showLogin')->name('login');
Route::post('/vote/login', 'VoteController@login')->name('login');
Route::get('/vote/dashboard', 'VoteController@index');
Route::get('/vote/logout', 'VoteController@destroy');

Route::get('admin/dashboard', function(){
    return view('admin.dashboard');
});

Route::get('admin/userManagement', 'userController@userM');
Route::post('admin/userManagement/tambah', 'userController@tambahUserM');
Route::get('admin/userManagement/ubahUser/{id}', 'userController@ubahUserM');
Route::put('admin/userManagement/update/{id}', 'userController@submitUserM');
Route::get('admin/userManagement/hapusUser/{id}', 'userController@hapusUserM');
Route::get('admin/userManagement/cari', 'userController@cari');

Route::get('admin/candidateManagement', 'candidateController@candidateM');
Route::post('admin/candidateManagement/tambah', 'candidateController@tambahCandidateM');
Route::get('admin/candidateManagement/ubahCandidate/{id}', 'candidateController@ubahCandidateM');
Route::put('admin/candidateManagement/update/{id}', 'candidateController@submitCandidateM');
Route::get('admin/candidateManagement/hapusCandidate/{id}', 'candidateController@hapusCandidateM');
Route::get('admin/candidateManagement/cari', 'candidateController@cari');

Route::get('admin/websiteManagement', function(){
    return view('admin.wm');
});
Route::get('admin/addUser', function(){
    return view('admin.addU');
});
Route::get('admin/addCandidate', function(){
    return view('admin.addC');
});

Route::get('/vote/voting', function(){
     return view('vote.voting');
});

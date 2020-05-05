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
Route::get('/vote/vote/{id}', 'VoteController@useVote')->name('vote');
Route::get('/vote/logout', 'VoteController@destroy');
Route::get('/vote/voting', function(){
    return view('vote.voting');
});


Route::get('admin/userManagement', 'UserController@userM');
Route::post('admin/userManagement/tambah', 'UserController@tambahUserM');
Route::get('admin/userManagement/ubahUser/{id}', 'UserController@ubahUserM');
Route::put('admin/userManagement/update/{id}', 'UserController@submitUserM');
Route::get('admin/userManagement/hapusUser/{id}', 'UserController@hapusUserM');
Route::get('admin/userManagement/cari', 'UserController@cari');

Route::get('admin/candidateManagement', 'CandidateController@candidateM');
Route::post('admin/candidateManagement/tambah', 'CandidateController@tambahCandidateM');
Route::get('admin/candidateManagement/ubahCandidate/{id}', 'CandidateController@ubahCandidateM');
Route::put('admin/candidateManagement/update/{id}', 'CandidateController@submitCandidateM');
Route::get('admin/candidateManagement/hapusCandidate/{id}', 'CandidateController@hapusCandidateM');
Route::get('admin/candidateManagement/cari', 'CandidateController@cari');

Route::get('admin/websiteManagement', function(){
    return view('admin.wm');
});
Route::get('admin/addUser', function(){
    return view('admin.addU');
});
Route::get('admin/addCandidate', function(){
    return view('admin.addC');
});

Route::get('/admin/login', 'AdminController@index')->name('adminlogin');
Route::post('/admin/login', 'AdminController@login')->name('adminlogin');
Route::get('admin/dashboard', 'AdminController@dashboard')->name('admindashboard');
Route::get('admin/logout', 'AdminController@destroy')->name('adminlogout');

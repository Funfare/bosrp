<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::resource('organizations', 'OrganizationController');
Route::prefix('organizations/{organization}')->name('organizations.')->group(function() {
    Route::get('dashboard', 'OrganizationController@dashboard')->name('dashboard');

    Route::resource('members', 'MemberController');
    Route::resource('qualifications', 'QualificationController');
    Route::resource('positions', 'PositionController');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/home', function(){
    return view('Egresado.panel');
})->name('home')->middleware('auth');

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

Route::resource('events', 'EventController');
Route::resource('investigations', 'InvestigationController');
Route::resource('graduates', 'GraduateController');
Route::resource('postgraduates', 'PostgraduateController');
Route::resource('jobs', 'JobController');


//Route::get('/home', 'HomeController@index')->name('home');

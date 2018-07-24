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
    return view('welcome');
});
Route::get('/who', function () {
    return 'WTF r ue';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function(){

Route::resource('companies','CompaniesController');
Route::get('projects/create/{company_id?}','ProjectsController@create');
Route::post('projects/adduser','ProjectsController@adduser')->name('projects.adduser');
Route::resource('projects','ProjectsController');
Route::resource('tasks','TasksController');
Route::resource('comments','CommentsController');
Route::resource('users','UsersController');
Route::resource('roles','RolesController');


});
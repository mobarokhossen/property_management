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

Route::get('/', 'LoginController@index');

Route::put('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

Route::get('/jobs', 'HomeController@manageJobs');


Route::get('/dashboard', 'AdminController@index');

Route::get('/add-contractor', 'ContractorController@addContractor');
Route::put('/add-contractor', 'ContractorController@saveContractor');
Route::get('/manage-contractors', 'ContractorController@manageContractor');

Route::get('/add-property', 'PropertyController@addProperty');
Route::put('/add-property', 'PropertyController@saveProperty');
Route::get('/manage-property', 'PropertyController@manageProperty');

Route::get('/add-jobs', 'JobsController@addJobs');
Route::put('/add-jobs', 'JobsController@saveJobs');
Route::get('/manage-jobs', 'JobsController@manageJobs');


Route::get('/add-users', 'UsersController@addUser');
Route::put('/add-users', 'UsersController@saveUser');
Route::get('/manage-users', 'UsersController@manageUser');
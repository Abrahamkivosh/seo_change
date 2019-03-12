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
Route::get('/', 'Auth\LoginController@index')->name('login');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

 Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/active-clients','AdminController@activeclient')->name('admin.active');
        Route::get('/Ongoing-SEO-Campaigns', 'AdminController@ongoingseocampaigns');
        Route::get('/expired-services', 'AdminController@expiredservices');
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
    });

    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::resource('companies', 'CompaniesController');

    Route::get('projects/create/{company_id?}', 'ProjectsController@create');
    Route::post('/projects/adduser', 'ProjectsController@adduser')->name('projects.adduser');
    Route::resource('projects', 'ProjectsController');
    Route::resource('roles', 'RolesController');
    Route::resource('tasks', 'TasksController');
    Route::resource('users', 'UsersController');
    Route::resource('comments', 'CommentsController');

    Route::resource('mail', 'ClientMailsController');


 });



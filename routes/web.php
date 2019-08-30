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


  Route::get('/', 'DashboardController@index')->middleware(['auth:client']);
  Route::get('/admin', 'DashboardController@index')->name('admin');


//Backend
Route::middleware(['auth:admin'])->prefix('admin')
          ->namespace('Backend')->group(function () {

  Route::resource('clients', 'ClientController')
          ->only([ 'index', 'create', 'store', 'edit', 'update', 'destroy' ]);
  Route::resource('users', 'UserController')
          ->only([ 'index', 'create', 'store', 'edit', 'update', 'destroy' ]);
});


//client
Route::middleware(['auth:client'])->group(function () {


  Route::get('dashboard', 'DashboardController@index');

  Route::resource('stocks', 'StockController');
  Route::resource('rawMeterials', 'RawMeterialsController');
  Route::resource('recipes', 'RecipeController');
  Route::resource('menus', 'MenuController');
  Route::resource('daliyPalanning', 'DaliyPalanningController');
  Route::get('reports/cost', 'ReportController@cost')->name('reports.cost');
  Route::get('reports/stock', 'ReportController@stock')->name('reports.stock');
});
///

Route::get('admin/login', 'Backend\Auth\LoginController@showLoginForm')
        ->name('backend.login');
Route::post('admin/login', 'Backend\Auth\LoginController@login');
Route::post('admin/logout', 'Backend\Auth\LoginController@logout')
        ->name('backend.logout');

Auth::routes();
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


/*
Route::get('/clear', function() {

   $exitCode = Artisan::call('cache:clear');
   $exitCode = Artisan::call('config:cache');
   $exitCode = Artisan::call('view:clear');
   return 'DONE'; //Return anything
});

/*
Route::get('/', function (){
   return 'INDEX';
});
*/
/*
Route::get('/', function () {
   return view('welcome');
});
*/
/*
Route::group([
   'prefix' => '/admin',
   'as' => 'admin.',
   'middleware' => 'auth'
], function () {

   Route::get('/', 'DashboardController')->name('dashboard');
   Route::resource('/categories', 'CategoryController');
   Route::get('/categories/export', 'CategoryController@export')->name('categories.export');
   Route::resource('/products', 'ProductController');
   Route::resource('/orders', 'OrderController');
  Route::resource('/clients', 'ClientController');

   Route::group([
       'prefix' => 'clients',
       'as' => 'clients.'
   ], function () {
       Route::get('/get-clients', 'ClientController@getClients')->name('get-clients');
   });
   Route::resource('/clients', 'ClientController');

   Route::get('/products', 'ProductController@index')->name('products.index');
   Route::get('/products/{product}', 'ProductController@show')->name('products.show');
});


/*

Auth::routes();

Auth::routes();

//Route::get('/home', 'HomeController@index');


Auth::routes();

 //Client Auth Routes

Route::get('/clients/register', 'Auth\RegisterController@clientRegisterForm')->name('client-register-form');
Route::post('/clients/register', 'Auth\RegisterController@registerClient')->name('register-client');
Route::get('/clients/login', 'Auth\LoginController@clientLoginForm')->name('client-login-form');
Route::post('/clients/login', 'Auth\LoginController@clientLogin')->name('client-login');
Route::get('/clients/logout', 'Auth\LoginController@clientLogout')->name('client-logout');

*/




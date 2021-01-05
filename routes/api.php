<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 

 

    Route::group([
        'middleware' => ['api', 'cors']
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
  

    Route::post('logout', 'AuthController@logout');
    
    Route::post('shoplogin', 'Makeyourshop@login');
    
    Route::post('shoplogout', 'MakeyourshopController@logout');
    Route::get('/products/get', 'ProductController@index');
    Route::post('/products', 'ProductController@store');
    Route::post('/products', 'ProductController@update');
    
    

    Route::get('/order', 'OrderController@index');
Route::get('/shops', 'ShopController@index');



Route::post('makeyourshop', 'Makeyourshop@register');

}); 


/*
Route::group([
    'middleware' => ['api', 'cors']
], function () {

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');


Route::post('logout', 'AuthController@logout');

Route::post('shoplogin', 'Makeyourshop@login');

Route::post('shoplogout', 'MakeyourshopController@logout');



Route::post('makeyourshop', 'Makeyourshop@register');

}); 
*/
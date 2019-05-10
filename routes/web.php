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

//Route::get('/hi', function () {
//   print_r([1, 2, 3]);
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/content', 'HomeController@content');

Route::get('/add/product/view','ProductController@addproductview');
Route::post('/add/product/insert','ProductController@addproductinsert');
//route ar vitor a {} diye vitore ja hobe ta laravel variabale hisabe dore nibe
//variable ar nam jekono kisu hote pare
//Route::get('/delect/product/{product_id}','ProductController@delectproduct');
Route::get('/delect/product/{product_id}','ProductController@delectproduct');




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

Route::get('/', ['uses'=>'Products@menuproducts','as'=>'home']);
Route::post('/', ['uses'=>'Products@newsletter','as'=>'home.newsletter']);
Route::get('/the-brand/',['uses'=>'Products@brand','as'=>'the-brand/']);
Route::get('/contact-us/',['uses'=>'Products@contact','as'=>'contact-us/']);
Route::post('/contact-us/',['uses'=>'Products@store','as'=>'contact-us.store']);


Route::get('/error/',['uses'=>'Products@error','as'=>'error/']);
Route::get('/product/{name?}',['uses'=>'Products@pagerender','as'=>'/product']);
Route::get('product-category/{name}',['uses'=>'Products@categoryrender','as'=>'/product-category']);
Route::any('/search', ['uses'=>'Products@search','as'=>'search']);
/*ADMIN*/

// Route::get('/admin',['uses'=>'Admin@login', 'as'=>'/admin']);
// Route::post('/dashboard',['uses'=>'Admin@login_load', 'as'=>'/dashboard']);
// Route::get('admin/adminpanel',['uses'=>'Products@admin', 'as'=>'admin/adminpanel']);
Auth::routes();
Route::get('newproduct',['uses'=>'Products@newproduct'])->middleware('auth');
Route::get('/allproducts',['uses'=>'Products@allproducts','as'=>'/allproducts'])->middleware('auth');
Route::get('changeproduct/{id}',['uses'=>'Products@changeproduct','as'=>'/changeproduct'])->middleware('auth');
Route::post('changepassword/',['uses'=>'HomeController@changepassword','as'=>'/changepassword'])->middleware('auth');

Route::get('/home', 'HomeController@index')->name('admin');

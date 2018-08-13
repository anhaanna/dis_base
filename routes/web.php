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
Route::get('/the-brand/',['uses'=>'Products@brand','as'=>'the-brand/']);
Route::get('/contact-us/',['uses'=>'Products@contact','as'=>'contact-us/']);
Route::post('/contact-us/',['uses'=>'Products@store','as'=>'contact-us.store']);


Route::get('/error/',['uses'=>'Products@error','as'=>'error/']);
Route::get('/product/{name?}',['uses'=>'Products@pagerender','as'=>'/product']);
Route::get('product-category/{name}',['uses'=>'Products@categoryrender','as'=>'/product-category']);
// Route::get('/admin''uses'=>'Admin@login')
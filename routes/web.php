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

Route::get('/', 'IndexController@index')->name('home');

Route::resource('articles', 'ArticlesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);



'php artisan make:scaffold Topic --schema="
Img:string:index
,category_id:integer:unsigned:index
,view_count:integer:unsigned:default(0)
,order:integer:unsigned:default(0)
,date"'

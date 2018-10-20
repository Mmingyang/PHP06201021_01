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


Route::get("goods/index","GoodsController@index")->name("goods.index");
Route::any("goods/add","GoodsController@add")->name("goods.add");
Route::any("goods/edit/{id}","GoodsController@edit")->name("goods.edit");
Route::get("goods/del/{id}","GoodsController@del")->name("goods.del");
Route::get("goods/ck/{id}","GoodsController@ck")->name("goods.ck");


Route::get("fenlei/index","FenleiController@index")->name("fenlei.index");
Route::any("fenlei/add","FenleiController@add")->name("fenlei.add");
Route::any("fenlei/edit/{id}","FenleiController@edit")->name("fenlei.edit");
Route::get("fenlei/del/{id}","FenleiController@del")->name("fenlei.del");



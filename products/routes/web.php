<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//表示させるだけの部分
//Route::get('/list',[App\Http\Controllers\ProductsController::class,'listShow']);
Route::get('/sign_up',[App\Http\Controllers\ProductsController::class,'signUpShow']);
Route::get('/detaile',[App\Http\Controllers\ProductsController::class,'detaileShow']);
Route::get('/edit',[App\Http\Controllers\ProductsController::class,'editShow']);

//listにDBのレコードを表示させる
//Route::get('/list','App\Http\Controllers\ProductsController@listGetDatas');
//編集したものを反映させる
Route::post('/edit','App\Http\Controllers\ProductsController@editUpdate');
//削除ボタン
Route::post('/list','App\Http\Controllers\ProductsController@listDestroy');
//新規登録
Route::post('/sign_up','App\Http\Controllers\ProductsController@signUp');
//検索機能追加
Route::get('/list','App\Http\Controllers\ProductsController@listSearch');


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

Route::get('/', function () {
    return view('welcome');
});

//YANA大学homepage
Route::get('/index','App\Http\Controllers\OpinionsController@index')->name('index');
Route::post('/index','App\Http\Controllers\OpinionsController@store');

//YANA大学数学科
Route::get('/math','App\Http\Controllers\IndexController@math');
//数学科科目
Route::get('/set_topology','App\Http\Controllers\IndexController@set_topology');
Route::get('/analysis','App\Http\Controllers\IndexController@analysis');
Route::get('/linearAlgebra','App\Http\Controllers\IndexController@linearAlgebra');
Route::get('/tensorAlgebra','App\Http\Controllers\IndexController@tensorAlgebra');
Route::get('/abstractAlgebra','App\Http\Controllers\IndexController@abstractAlgebra');
Route::get('/differentialGeometry','App\Http\Controllers\IndexController@differentialGeometry');
Route::get('/complexAnalysis','App\Http\Controllers\IndexController@complexAnalysis');

//YANA大学物理学科
Route::get('/physics','App\Http\Controllers\IndexController@physics');
Route::get('/mechanics','App\Http\Controllers\IndexController@mechanics');
Route::get('/electromagnetics','App\Http\Controllers\IndexController@electromagnetics');



//YANA大学情報工学科
Route::get('/programming','App\Http\Controllers\IndexController@programming');
//YANAイラスト創作科
Route::get('/illust','App\Http\Controllers\IndexController@illust');
//YANA大学カフェ
Route::get('/bgm','App\Http\Controllers\IndexController@bgm');
Route::post('/bgm','App\Http\Controllers\IndexController@bgm');
Route::get('/bgmConfig','App\Http\Controllers\IndexController@bgmConfig')->name('submit');
Route::post('/bgmConfig','App\Http\Controllers\IndexController@bgmValidation');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

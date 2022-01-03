<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\NewsIDController;
use \App\Http\Controllers\AddNewsController;
use \App\Http\Controllers\Admin\NewsController as AdminNewsController;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//


//admin
//Route::group(['prefix'=>'admin','as'=>'admin.', function(){
//    Route::resource('/news', [AdminNewsController::class]);
//    Route::resource('/categories',[AdminCategoryController::class]);
//}]);

Route::get('/', [HomeController::class,'index'])
    ->name('home.index');

Route::get('/addNews', [AddNewsController::class,'index'])
    ->name('addNews.index');

Route::get('/categories', [CategoryController::class,'index'])
    ->name('category.index');

Route::get('/categories/{category}/', [NewsController::class,'index'])
    ->name('news.index');

Route::get('/categories/{category}/{id}', [NewsIDController::class,'index'])
    ->where('id','\d+')
    ->name('newsID.index');



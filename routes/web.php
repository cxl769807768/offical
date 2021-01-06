<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\UploadsController;
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
Route::get('/',[IndexController::class,'index'])->name('/');


Route::get('/products',[OtherController::class,'products'])->name('/products');
Route::get('/vivid',[OtherController::class,'vivid'])->name('/vivid');
Route::get('/development',[OtherController::class,'development'])->name('/development');
Route::get('/vividVideo',[OtherController::class,'videoVivid'])->name('/vividVideo');
Route::get('/certificates',[OtherController::class,'certificates'])->name('/certificates');
Route::get('/contactUs',[OtherController::class,'contactUs'])->name('/contactUs');
Route::post('/contact', [OtherController::class,'contact']);

Route::get('/jobs',[JobsController::class,'index'])->name('/jobs');
Route::post('/apply', [JobsController::class,'apply']);



Route::get('/articles',[ArticleController::class,'index'])->name('/articles');
Route::get('/articles/detail',[ArticleController::class,'detail'])->name('/articles/detail');

//Route::get('/jobs/{$id?}', [JobsController::class,'index']);
Route::get('/news',[NewsController::class,'index'])->name('/news');
Route::get('/news/detail',[NewsController::class,'detail'])->name('/news/detail');

Route::post('/uploadFile/', [UploadsController::class,'uploadFile']);



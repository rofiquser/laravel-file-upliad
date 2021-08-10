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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin',[App\Http\Controllers\fileUploadController::class,'view']);
Route::post('/fileUp',[App\Http\Controllers\fileUploadController::class,'fileUpload']);

Route::get('/',[App\Http\Controllers\userController::class,'view']);
Route::get('/getData',[App\Http\Controllers\userController::class,'getData']);
Route::get('/download/{folderPath}/{fileName}',[App\Http\Controllers\userController::class,'download']);
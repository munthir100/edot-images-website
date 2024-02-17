<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\TestController;
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

Route::view('/', 'index');
Route::view('/editImage', 'editImage')->name('editImage');
Route::view('/removeBackground', 'removeBackground')->name('removeBackground');

Route::post('/editImage',[ImageController::class,'editImage']);
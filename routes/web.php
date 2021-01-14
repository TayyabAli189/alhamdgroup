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

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class,'view_home']);
Route::get('/about',[\App\Http\Controllers\Frontend\AboutController::class,'view_about'])->name('frontend.about.about');
Route::get('/contact',[\App\Http\Controllers\Frontend\ContactController::class,'view_contact'])->name('frontend.contact.contact');
Route::get('/service',[\App\Http\Controllers\Frontend\ServiceController::class,'view_service'])->name('frontend.service.service');


Route::get('/admin',[\App\Http\Controllers\Backend\ContactController::class,'contact'])->name('backend.contact.index');

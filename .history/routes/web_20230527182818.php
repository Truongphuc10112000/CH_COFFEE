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

Route::get('/index', function () {
    return view('index');
});
Route::controller(App\Http\Controllers\homecontroller::class)->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/todayspecial', 'todayspecial')->name('todayspecial');
    Route::get('/contact', 'contact')->name('contact');
});
// Route::get('/layoutadmin',function(){
//     return view ('layoutadmin');
// });
Route::controller(App\Http\Controllers\loaispcontroller::class)->group(function () {
    Route::get('/loaispadmin', 'index')->name('index');
});

Route::controller(App\Http\Controllers\donhangcontroller::class)->group(function () {
    Route::get('/donhangadmin', 'index')->name('index');
});

Route::controller(App\Http\Controllers\chitietdonhangcontroller::class)->group(function () {
    Route::get('/chitietdonhangadmin', 'index')->name('index');
});

Route::controller(App\Http\Controllers\chitiethoadonnhapcontroller::class)->group(function () {
    Route::get('/chitiethoadonnhapadmin', 'index')->name('index');
});

Route::controller(App\Http\Controllers\chitietkhocontroller::class)->group(function () {
    Route::get('/chitietkhoadmin', 'index')->name('index');
});

Route::controller(App\Http\Controllers\chitiettintuccontroller::class)->group(function () {
    Route::get('/chitiettintucadmin', 'index')->name('index');
});

Route::controller(App\Http\Controllers\layoutController::class)->group(function () {
    Route::get('/layout', 'index')->name('index');
});

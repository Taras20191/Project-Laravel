<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/Category', function () {
    return view('Category');
})->name('Category');

Route::get('/Home', function () {
    return view('Home');
})->name('Home');

Route::get('/News', function () {
    return view('News');
})->name('News');


Route::get('/categories/all', 'CategoryController@allData')->name('categories');
Route::get('/categories/all', [CategoryController::class, 'show'])->name('categories');




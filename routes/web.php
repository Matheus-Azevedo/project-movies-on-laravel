<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

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

Route::get('/', MoviesController::class . '@index')->name('movies.index');

Route::get('/movies/create', MoviesController::class . '@create')->name('movies.create');
Route::post('/movies/create', MoviesController::class . '@store')->name('movies.store');

Route::get('/movies/show/{id}', MoviesController::class . '@show')->name('movies.show');

Route::get('/movies/edit/{id}', MoviesController::class . '@edit')->name('movies.edit');
Route::post('/movies/edit/{id}', MoviesController::class . '@update')->name('movies.update');

Route::get('/movies/delete/{id}', MoviesController::class . '@delete')->name('movies.delete');
Route::post('/movies/delete/{id}', MoviesController::class . '@destroy')->name('movies.destroy');

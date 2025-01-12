<?php

use App\Http\Controllers\HelloController;
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
Route::get('/hello', [HelloController::class, 'showForm'])->name('hello.form');
Route::post('/hello', [HelloController::class, 'processForm'])->name('hello.process');
Route::get('/hello/{n}', [HelloController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
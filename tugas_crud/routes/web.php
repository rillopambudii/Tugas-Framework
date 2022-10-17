<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');

Route::get('/tambah', [CustomerController::class, 'tambah'])->name('tambah');

Route::post('/insertdata', [CustomerController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}', [CustomerController::class, 'tampildata'])->name('tampildata');

Route::post('/updatedata/{id}', [CustomerController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('delete');

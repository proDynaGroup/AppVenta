<?php

use App\Http\Controllers\ProductoController;
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
    return view('Seguridad.login');
})->name('loginAuth');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {

    return view('dashboard');

})->name('dashboard');


Route::get('producto', function () {
    return view('producto.producto');
})->name('producto');

Route::get('producto/list',[ProductoController::class,'list'])->name('producto.list');

Route::get('welcome', function () {

    return view('welcome');
});



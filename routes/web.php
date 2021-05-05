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


Route::get('test', function () {
    return view('test');
})->name('test');

Route::get('master', function () {

    return view('master');

})->name('master');

Route::get('submenu', function () {

    return view('test2');
})->name('sub');

Route::get('/', function () {
    return view('Seguridad.login');
})->name('log');

Route::get('dashboard', function () {

    return view('dashboard');

})->name('dashboard');



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
    return view('index');
});


Route::get('/form', function () {
    return view('form');
});

Route::get('/welcome1', function () {
    return view('welcome1');
});


Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/items', function () {
    return view('items.index1');
});

Route::get('/partials', function () {
    return view('partials.tables');
});

Route::get('/partials', function () {
    return view('partials.datatables');
});
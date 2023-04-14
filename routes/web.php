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
    return view('Login');
});

Route::get('/admin', function () {
    return view('admindash');
});

Route::get('/inicio', function () {
    return view('Vista1');
});

Route::get('/AgregarUsuario', function () {
    return view('IngresarUsuariodash');
});

Route::get('/admin/proveedores', function () {
    return view('proveedores');
});

Route::get('/productos', function () {
    return view('productos');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

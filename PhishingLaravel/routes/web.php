<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

Route::get('/', function () {
    return view('index');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::post('/registro', [RegistroController::class, 'guardar'])
    ->name('registro.guardar');
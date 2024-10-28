<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', function () {
    return view('mensajes.mensaje');
});

Route::get('/mensajes/mensaje', [MessageController::class, 'showMessage'])->name('mensajes.mensaje');
Route::post('/mensajes/mostrar', [MessageController::class, 'save'])->name('mensajes.mostrar');
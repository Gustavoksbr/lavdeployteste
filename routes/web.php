<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;

Route::get('/', function () {
    return view('welcome');
});

//mensagem
Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);
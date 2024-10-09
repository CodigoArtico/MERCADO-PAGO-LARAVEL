<?php

use App\Http\Controllers\MercadoPagoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//mercado pago
Route::post('/create-preference', [MercadoPagoController::class, 'createPaymentPreference']);
Route::get('/mercadopago/success', [MercadoPagoController::class, 'success'])->name('mercadopago.success');
Route::get('/mercadopago/failed', [MercadoPagoController::class, 'failed'])->name('mercadopago.failed');

<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaymentController::class, 'index'])->name('paypal.payment.index');
Route::get('/payment/{id}', [PaymentController::class, 'PaypalPaymentLink'])->name('paypal.payment.payment');
Route::get('/payment/success', [PaymentController::class, 'PaymentSuccess'])->name('paypal.payment.success');
Route::get('/payment/cancel', [PaymentController::class, 'PaymentCancel'])->name('paypal.payment.cancel');
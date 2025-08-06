<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaymentController::class, 'index']);
Route::get('/payment/{id}', [PaymentController::class, 'PaypalPaymentLink']);
Route::get('/payment/success', [PaymentController::class, 'PaymentSuccess'])->name('paypal.payment.success');
Route::get('/payment/cancel', [PaymentController::class, 'PaymentCancel'])->name('paypal.payment.cancel');
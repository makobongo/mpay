<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaymentController::class, 'index'])->name('paypal.payment.index');
Route::prefix('payment')->group(function () {
    Route::post('/', [PaymentController::class, 'PaypalPaymentLink'])->name('paypal.payment.payment');
    Route::get('/success', [PaymentController::class, 'PaymentSuccess'])->name('paypal.payment.success');
    Route::get('/cancel', [PaymentController::class, 'PaymentCancel'])->name('paypal.payment.cancel');
});
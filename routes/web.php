<?php

use Illuminate\Support\Facades\Route;

Route::get('stripe/pay/{id}', '\Lumen\Cashier\Http\Controllers\PaymentController@pay');
Route::post('stripe/webhook', 'Lumen\Cashier\Http\Controllers\WebhookController@handleWebhook');

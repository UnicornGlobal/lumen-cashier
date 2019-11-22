<?php

$this->app->router->get('stripe/pay/{id}', ['as' => 'pay', 'uses' => '\Lumen\Cashier\Http\Controllers\PaymentController@pay']);
$this->app->router->post('stripe/webhook', ['as' => 'webhook', 'uses' => '\Lumen\Cashier\Http\Controllers\WebhookController@handleWebhook']);

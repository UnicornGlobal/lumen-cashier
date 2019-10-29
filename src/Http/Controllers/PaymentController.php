<?php

namespace Lumen\Cashier\Http\Controllers;

use Illuminate\Routing\Controller;
use Lumen\Cashier\Cashier;
use Lumen\Cashier\Payment;
use Stripe\PaymentIntent as StripePaymentIntent;

class PaymentController extends Controller
{
    /**
     * Display a json response containing the required info
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return response()->json([
            'stripeKey' => config('cashier.key'),
            'payment' => new Payment(
                StripePaymentIntent::retrieve($id, Cashier::stripeOptions())
            ),
            'redirect' => request('redirect'),
        ]);
    }
}

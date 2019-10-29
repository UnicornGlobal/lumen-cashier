<?php

namespace Lumen\Cashier\Exceptions;

use Lumen\Cashier\Payment;

class PaymentActionRequired extends IncompletePayment
{
    /**
     * Create a new PaymentActionRequired instance.
     *
     * @param  \Lumen\Cashier\Payment  $payment
     * @return self
     */
    public static function incomplete(Payment $payment)
    {
        return new self(
            $payment,
            'The payment attempt failed because additional action is required before it can be completed.'
        );
    }
}

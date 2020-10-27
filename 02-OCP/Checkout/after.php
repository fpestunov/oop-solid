<?php

interface PaymentMethodInterface
{
    public function acceptPayment($receipt);
}

class CashPayment implements PaymentMethodInterface
{
    public function acceptPayment($receipt)
    {
    }
}

class BitCoinPayment implements PaymentMethodInterface
{
    public function acceptPayment($receipt)
    {
    }
}

class Chekout
{
    public function begin(Receipt $receipt, PaymentMethodInterface $payment)
    {
        $payment->acceptPayment();
    }

    public function acceptCash($receipt)
    {
        // accept the cash
    }
}

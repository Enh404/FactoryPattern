<?php

namespace Sweetman\FactoryPattern;

class TcfPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        return new TcfPayment();
    }
}
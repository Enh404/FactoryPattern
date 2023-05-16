<?php

namespace Sweetman\FactoryPattern;

class SberPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        return new SberPayment();
    }
}
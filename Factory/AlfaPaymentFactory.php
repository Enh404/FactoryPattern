<?php

namespace Sweetman\FactoryPattern;

class AlfaPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        return new AlfaPayment();
    }
}
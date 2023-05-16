<?php

namespace Sweetman\FactoryPattern;

interface PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface;
}
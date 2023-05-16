<?php

namespace Sweetman\FactoryPattern;

interface PaymentInterface
{
    public function pay(Order $order): void;
}
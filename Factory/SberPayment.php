<?php

namespace Sweetman\FactoryPattern;

class SberPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        echo 'Sber pay success ' . $order->getSum() . ' rub' . PHP_EOL;
    }
}
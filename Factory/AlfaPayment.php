<?php

namespace Sweetman\FactoryPattern;

class AlfaPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        echo 'Alfa pay success ' . $order->getSum() . ' rub' . PHP_EOL;
    }
}
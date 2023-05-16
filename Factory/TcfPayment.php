<?php

namespace Sweetman\FactoryPattern;

class TcfPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        echo 'Tcf pay success ' . $order->getSum() . ' rub' . PHP_EOL;
    }
}
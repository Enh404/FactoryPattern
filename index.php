<?php

require_once 'vendor/autoload.php';

$orderData = [
    [
        'order' => new \Sweetman\FactoryPattern\Order(3000),
        'paymentType' => 'sber',
    ],
    [
        'order' => new \Sweetman\FactoryPattern\Order(3800),
        'paymentType' => 'alfa',
    ],
    [
        'order' => new \Sweetman\FactoryPattern\Order(500),
        'paymentType' => 'tcf',
    ]
];

foreach ($orderData as $orderDataItem) {
    $order = $orderDataItem['order'];
    $paymentType = $orderDataItem['paymentType'];
    $payment = \Sweetman\FactoryPattern\PaymentHelper::getPaymentFactory($paymentType)->createPayment();
    $payment->pay($order);
}

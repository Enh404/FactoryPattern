<?php

namespace Sweetman\FactoryPattern;

use Exception;

class PaymentHelper
{
    /**
     * @throws Exception
     */
    public static function getPaymentFactory(string $paymentType): PaymentFactoryInterface
    {
        switch ($paymentType){
            case 'sber' : {
                return new SberPaymentFactory();
            }
            case 'alfa' : {
                return new AlfaPaymentFactory();
            }
            case 'tcf' : {
                return new TcfPaymentFactory();
            }
            default: {
                throw new Exception('undefined method type: ' . $paymentType);
            }
        }
    }
}
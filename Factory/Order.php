<?php

namespace Sweetman\FactoryPattern;

class Order
{
    private int $sum;

    /**
     * @param int $sum
     */
    public function __construct(int $sum)
    {
        $this->sum = $sum;
    }

    /**
     * @return int
     */
    public function getSum(): int
    {
        return $this->sum;
    }
}
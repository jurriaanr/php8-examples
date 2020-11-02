<?php

class Money
{
    public function __construct(
        private string $currency,
        private int $amount,
    ) {}

    public function getAmount(): int
    {
        return $this->amount;
    }
}

$money = new Money('EUR', 100);
// echo $money->amount; <- this wont work
echo $money->getAmount();

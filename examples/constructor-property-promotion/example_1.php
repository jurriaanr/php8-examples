<?php

class Money
{
    public function __construct(
        public string $currency,
        public int $amount,
    ) {}

    public function getAmount(): int
    {
        return $this->amount;
    }
}

$money = new Money('EUR', 100);
echo $money->amount;
echo "\n";
echo $money->getAmount();

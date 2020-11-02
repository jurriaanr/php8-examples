<?php

class Money
{
    public string $currency;

    public function __construct(
        string $currency,
        public int $amount,
    ) {
        $this->currency = $currency;
    }
}

$money = new Money('EUR', 100);
echo $money->currency . $money->amount;

<?php
declare(strict_types=1);

class Money
{
    private int|float $amount;
    private Currency $currency;

    function __construct(int|float $amountValue, Currency $currencyValue)
    {
        $this->setAmount($amountValue);
        $this->setCurrency($currencyValue);
    }

    private function setAmount(int|float $amountValue):void
    {
        $this->amount = $amountValue;
    }

    private function setCurrency(Currency $currencyValue): void
    {
        $this->currency = $currencyValue;
    }

    public function getAmount(): int|float
    {
        return $this->amount;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function equals(Money $moneyValue): bool
    {
        return (
            $this->amount === $moneyValue->amount
            &&
            $this->currency->equals($moneyValue->getCurrency())
        );
    }

    public function add(Money $moneyValue): int|Money
    {
        if ($this->currency->equals($moneyValue->getCurrency())) {
            return new Money($this->amount + $moneyValue->amount, new Currency($this->currency->getIsoCode()));
        }
        else {
            return -1;
        }

    }
}
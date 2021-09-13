<?php

declare(strict_types=1);

namespace App;

class Money
{
    private int|float $amount;
    private Currency $currency;

    public function __construct(int|float $amountValue, Currency $currencyValue)
    {
        $this->setAmount($amountValue);
        $this->setCurrency($currencyValue);
    }

    private function setAmount(int|float $amountValue): void
    {
        if ($amountValue <= 0) {
            exit('Amount error');
        }
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
            $this->getAmount() === $moneyValue->amount
            &&
            $this->getCurrency()->getIsoCode() === $moneyValue->getCurrency()->getIsoCode()
        );
    }

    public function add(Money $moneyValue): Money
    {
        if ($this->getCurrency()->getIsoCode() !== $moneyValue->getCurrency()->getIsoCode()) {
            exit('ISO Currency error');
        }
        return new self($this->getAmount() + $moneyValue->getAmount(), $this->getCurrency());
    }
}

<?php

interface Pay
{
    public function getAmount();
}
abstract class PayMethod
{
    abstract public function newPay(): Pay;

    public function totalPay()
    {
        $Pay = $this->newPay();
        return $Pay->getAmount();
    }
}
class Crypto implements Pay
{
    private int $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount(): int
    {
        return $this->amount;
    }
}
class Debit implements Pay
{
    private int $amount;
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount(): int
    {
        return $this->amount;
    }
}
class CoinbasePayMethod extends PayMethod
{
    private int $amount;
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function newPay(): Pay
    {
        return new Crypto($this->amount);
    }
}
class LiqPayMeyhod extends PayMethod
{
    private int $amount;
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function newPay(): Pay
    {
        return new Debit($this->amount);
    }
}
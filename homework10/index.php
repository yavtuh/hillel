<?php
interface Money
{
    public function amount();
}

class Btc implements Money
{
    public function amount()
    {
    }
}

class Usd implements Money
{
    public function amount()
    {
    }
}

class Visa
{
    public function pay()
    {
    }
}

class Crypto
{
    public function convert()
    {
    }
}


class CryptoAdapter implements Money
{
    protected $money;

    public function __construct(Crypto $money)
    {
        $this->money = $money;
    }

    public function amount()
    {
        $this->money->convert();
    }
}
class DebitAdapter implements Money
{
    protected $money;

    public function __construct(Visa $money)
    {
        $this->money = $money;
    }

    public function amount()
    {
        $this->money->pay();
    }
}

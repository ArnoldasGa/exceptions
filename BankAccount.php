<?php

class BankAccount
{
    protected float $money;
    public function __construct($money)
    {
        $this->money = $money;
    }

    public function widraw(int $amount) : float
    {
        try {
            if ($amount > $this->money)
            {
                throw new NotEnoughBalanceException();
            }
            if ($amount < 0)
            {
                throw new NegativeAmountException();
            }
            
            $this->money = $this->money - $amount;
        } catch (Throwable $exception) {
            echo $exception->getMessage() . PHP_EOL;
        }
        
        return $this->money;
    }

}
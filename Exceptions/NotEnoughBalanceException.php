<?php

class NotEnoughBalanceException extends Exception 
{
    public function __construct()
    {
        parent::__construct("Nepakankamas likutis.");
    }
}
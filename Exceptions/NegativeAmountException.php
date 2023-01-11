<?php

class NegativeAmountException extends Exception 
{
    public function __construct()
    {
        parent::__construct("Negali buti neigiama isemimo suma.");
    }
}
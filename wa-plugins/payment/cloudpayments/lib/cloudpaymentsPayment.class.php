<?php

class cloudpaymentsPayment extends waPayment
{
    public function allowedCurrency()
    {
        return true;
    }
}

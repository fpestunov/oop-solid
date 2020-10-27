<?php

class Chekout
{
    public function begin(Receipt $receipt)
    {
        $this->acceptCash($receipt);
        // ?
        $this->acceptCard($receipt);
        // ?
        $this->acceptBitcoin($receipt);
    }

    public function acceptCash($receipt)
    {
        // accept the cash
    }
}

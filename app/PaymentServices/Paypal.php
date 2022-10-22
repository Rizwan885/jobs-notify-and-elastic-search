<?php
namespace App\PaymentServices;

class Paypal implements PaymentServiceInterface{
    // private $transaction;
    // public function __construct($transaction)
    // {
    //     $this->transaction=$transaction;
    // }
    // public function pay():string{
    //     return  $this->transaction;
    // }
    public function checkout()
    {
        return "checkout";
    }
}
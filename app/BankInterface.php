<?php
namespace App;

interface BankInterface {
    public function verifyAccountNumber($payload);
    public function sendMoney($payload);
}
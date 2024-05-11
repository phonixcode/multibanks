<?php
namespace App;

class GTBank implements BankInterface {
    public function verifyAccountNumber($payload) {
        // Assuming the verification process involves some logic

        // Simulated verification logic
        if ($payload['account_number'] === '1234567890') {
            return true; // Account number is valid
        } else {
            return false; // Account number is invalid
        }
    }
    
    public function sendMoney($payload) {
        // Assuming the money transfer process involves some logic

        // Simulated money transfer logic
        if ($payload['amount'] > 0) {
            return true; // Money transfer successful
        } else {
            return false; // Money transfer failed
        }
    }
}
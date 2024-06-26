<?php

// Import the necessary classes
use App\BankFactory;

// Include the autoloader generated by Composer
require_once 'vendor/autoload.php';


// Example usage:

// Create an instance of GTBank from the bank factory
$gtBank = BankFactory::createBank('gtbank');

// Verify account number with GTBank
$gtBankPayload = ['account_number' => '1234567890'];
$gtBank->verifyAccountNumber($gtBankPayload);

// Send money with GTBank
$sendMoneyPayload = ['amount' => 100];
$gtBank->sendMoney($sendMoneyPayload);

// Create an instance of ZenithBank from the bank factory
$zenithBank = BankFactory::createBank('zenithbank');

// Verify account number with ZenithBank
$zenithBankPayload = ['account_number' => '0987654321'];
$zenithBank->verifyAccountNumber($zenithBankPayload);

// Send money with ZenithBank
$sendMoneyPayload = ['amount' => 200]; 
$zenithBank->sendMoney($sendMoneyPayload);

// Create an instance of AccessBank from the bank factory
$accessBank = BankFactory::createBank('accessbank');

// Verify account number with AccessBank
$accessBankPayload = ['account_number' => '1357924680'];
$accessBank->verifyAccountNumber($accessBankPayload);

// Send money with AccessBank
$sendMoneyPayload = ['amount' => 300];
$accessBank->sendMoney($sendMoneyPayload);

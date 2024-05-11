<?php
namespace Tests\BankTest;

use App\BankFactory;
use PHPUnit\Framework\TestCase;

class BankTest extends TestCase {
    public function testGTBank() {
        // Get an instance of GTBank from bank factory
        $bankFactory = BankFactory::createBank('gtbank');
        
        // Verify account number
        $verifyPayload = ['account_number' => '1234567890'];
        $verifyResult = $bankFactory->verifyAccountNumber($verifyPayload);
        
        // Assert that the account verification was successful
        $this->assertTrue($verifyResult, "Account verification should be successful for GTBank.");
        
        // Send money
        $sendPayload = ['amount' => 100];
        $sendResult = $bankFactory->sendMoney($sendPayload);
        
        // Assert that the money transfer was successful
        $this->assertTrue($sendResult, "Money transfer should be successful for GTBank.");
    }

    public function testZenithBank() {
        // Get an instance of GTBank from bank factory
        $bankFactory = BankFactory::createBank('zenithbank');
        
        // Verify account number
        $verifyPayload = ['account_number' => '0987654321'];
        $verifyResult = $bankFactory->verifyAccountNumber($verifyPayload);
        
        // Assert that the account verification was successful
        $this->assertTrue($verifyResult, "Account verification should be successful for Zenith Bank.");
        
        // Send money
        $sendPayload = ['amount' => 100];
        $sendResult = $bankFactory->sendMoney($sendPayload);
        
        // Assert that the money transfer was successful
        $this->assertTrue($sendResult, "Money transfer should be successful for Zenith Bank.");
    }

    public function testAccessBank() {
        // Get an instance of GTBank from bank factory
        $bankFactory = BankFactory::createBank('accessbank');
        
        // Verify account number
        $verifyPayload = ['account_number' => '1357924680'];
        $verifyResult = $bankFactory->verifyAccountNumber($verifyPayload);
        
        // Assert that the account verification was successful
        $this->assertTrue($verifyResult, "Account verification should be successful for Access Bank.");
        
        // Send money
        $sendPayload = ['amount' => 100];
        $sendResult = $bankFactory->sendMoney($sendPayload);
        
        // Assert that the money transfer was successful
        $this->assertTrue($sendResult, "Money transfer should be successful for Access Bank.");
    }
}

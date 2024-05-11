<?php
namespace App;

use Exception;
use App\GTBank;
use App\AccessBank;
use App\ZenithBank;

class BankFactory {
    public static function createBank($bankName) {
        switch($bankName) {
            case 'gtbank':
                return new GTBank();
            case 'zenithbank':
                return new ZenithBank();
            case 'accessbank':
                return new AccessBank();
            default:
                throw new Exception("Invalid bank name");
        }
    }
}
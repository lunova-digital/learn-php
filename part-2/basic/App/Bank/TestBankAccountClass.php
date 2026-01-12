<?php

namespace App\Bank;

use App\Bank\Enum\AccountType;

class TestBankAccountClass extends BankAccount {
    public function __construct(string $accountName, float $balance, ?string $father_name = null, AccountType $accountType = AccountType::SAVINGS)
    {
        parent::__construct($accountName, $balance, $father_name, $accountType);
    }
}
